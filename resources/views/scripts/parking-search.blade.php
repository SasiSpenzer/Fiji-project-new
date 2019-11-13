<script>
    $(function() {
        var cardTitle = $('#card_title');
        var usersTable = $('#branch_type_table');
        var resultsContainer = $('#search_results');
        var usersCount = $('#branch_type_count');
        var clearSearchTrigger = $('.clear-search');
        var searchform = $('#parking-search');
        var searchformInput = $('#branch_search_box');
        var userPagination = $('#user_pagination');
        var searchSubmit = $('#search_trigger');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        searchform.submit(function(e) {
            e.preventDefault();
            resultsContainer.html('');
            usersTable.hide();
            clearSearchTrigger.show();
            let noResulsHtml = '<tr>' +
                '<td>{!! trans("organization.search.no-results") !!}</td>' +
                '<td></td>' +
                '<td class="hidden-xs"></td>' +
                '<td class="hidden-xs"></td>' +
                '<td class="hidden-xs"></td>' +
                '<td class="hidden-sm hidden-xs"></td>' +
                '<td class="hidden-sm hidden-xs hidden-md"></td>' +
                '<td class="hidden-sm hidden-xs hidden-md"></td>' +
                '<td></td>' +
                '<td></td>' +
                '<td></td>' +
                '</tr>';

            $.ajax({
                type:'POST',
                url: "{{ route('parkingSearch') }}",
                data: searchform.serialize(),
                success: function (result) {
                    let jsonData = JSON.parse(result);
                    if (jsonData.length != 0) {
                        $.each(jsonData, function(index, val) {


                            let editCellHtml = '<button onclick="modelshow('+ val.id +')" id="parking-request-approve" class="btn btn-sm btn-info btn-block"  data-toggle="tooltip" title="approve">\n' +
                                '                                                Approve Request\n' +
                                '                                            </button>';


                            if(val.status = 1){
                                val.status = "Active";
                            }else {
                                val.status = "Disabled";
                            }
                            resultsContainer.append('<tr>' +
                                '<td>' + val.parking_id + '</td>' +
                                '<td>' + val.meeting_name + '</td>' +
                                '<td>' + val.first_name + '</td>' +
                                '<td class="hidden-xs">' + val.date_time + '</td>' +
                                '<td></td>' +

                                '<td>' + editCellHtml + '</td>' +
                                '</tr>');
                        });
                    } else {
                        resultsContainer.append(noResulsHtml);
                    };
                    usersCount.html(jsonData.length + " {!! trans('organization.search.found-footer') !!}");
                    userPagination.hide();
                    cardTitle.html("{!! trans('usersmanagement.search.title') !!}");
                },
                error: function (response, status, error) {
                    if (response.status === 422) {
                        resultsContainer.append(noResulsHtml);
                        usersCount.html(0 + " {!! trans('organization.search.found-footer') !!}");
                        userPagination.hide();
                        cardTitle.html("{!! trans('organization.search.title') !!}");
                    };
                },
            });
        });
        searchSubmit.click(function(event) {
            event.preventDefault();
            searchform.submit();
        });
        searchformInput.keyup(function(event) {
            if ($('#branch_search_box').val() != '') {
                clearSearchTrigger.show();
            } else {
                clearSearchTrigger.hide();
                resultsContainer.html('');
                usersTable.show();
                cardTitle.html("Show all Requests");
                userPagination.show();
                usersCount.html(" ");
            };
        });
        clearSearchTrigger.click(function(e) {
            e.preventDefault();
            clearSearchTrigger.hide();
            usersTable.show();
            resultsContainer.html('');
            searchformInput.val('');
            cardTitle.html("Show all Requests");
            userPagination.show();
            usersCount.html(" ");
        });
    });
</script>
