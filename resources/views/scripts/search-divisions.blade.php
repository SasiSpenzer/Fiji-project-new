<script>
    $(function() {
        var cardTitle = $('#card_title');
        var usersTable = $('#branch_division_table');
        var resultsContainer = $('#search_results');
        var usersCount = $('#divisions_count');
        var clearSearchTrigger = $('.clear-search');
        var searchform = $('#search_branch_division');
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
                url: "{{ route('branch-division-search') }}",
                data: searchform.serialize(),
                success: function (result) {
                    let jsonData = JSON.parse(result);
                    if (jsonData.length != 0) {
                        $.each(jsonData, function(index, val) {


                            let editCellHtml = '<a class="badge badge-primary" href="branch-division/' + val.devID + '" data-toggle="tooltip" title="{{ trans("usersmanagement.tooltips.edit") }}"><h6>Edit Division</h6></a>';
                            let deleteCellHtml = '<form method="POST" action="branch-division-delete/'+ val.devID +'" accept-charset="UTF-8" data-toggle="tooltip" title="Delete">' +
                                    '{!! Form::hidden("_method", "DELETE") !!}' +
                                    '{!! csrf_field() !!}' +
                                    '<span class="badge badge-danger" type="button" style="width: 100%;" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Branch" data-message="{!! trans("usersmanagement.modals.delete_user_message", ["user" => "'+val.name+'"]) !!}">' +
                                        '<h6>Delete Division</h6>' +
                                    '</button>' +
                                '</form>';

                            if(val.status = 1){
                                val.status = 'Active';
                            }else{
                                val.status = 'disabled';
                            }

                            resultsContainer.append('<tr>' +
                                '<td>' + val.devID + '</td>' +
                                '<td>' + val.division_code + '</td>' +
                                '<td class="hidden-xs">' + val.contact_number + '</td>' +
                                '<td class="hidden-xs">' + val.email + '</td>' +
                                '<td class="hidden-xs">' + val.status + '</td>' +

                                '<td class="hidden-sm hidden-xs hidden-md">' + val.created_at + '</td>' +
                                '<td class="hidden-sm hidden-xs hidden-md">' + val.updated_at + '</td>' +
                                '<td>' + deleteCellHtml + '</td>' +

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
                cardTitle.html("Showing All Divisions");
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
            cardTitle.html("Showing All Divisions");
            userPagination.show();
            usersCount.html(" ");
        });
    });
</script>
