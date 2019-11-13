<script>
    $(function() {
        var cardTitle = $('#card_title');
        var usersTable = $('#branch_table');
        var resultsContainer = $('#search_results');
        var usersCount = $('#branch_count');
        var clearSearchTrigger = $('.clear-search');
        var searchform = $('#search_branch');
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
                url: "{{ route('branch-search') }}",
                data: searchform.serialize(),
                success: function (result) {
                    let jsonData = JSON.parse(result);
                    if (jsonData.length != 0) {
                        $.each(jsonData, function(index, val) {
                            let rolesHtml = '';
                            let roleClass = '';
                            let showCellHtml = '<a class="btn btn-sm btn-success btn-block" href="organization/branch/' + val.id + '" data-toggle="tooltip" title="{{ trans("organization.buttons.show") }}">{!! trans("usersmanagement.buttons.show") !!}</a>';
                            let editCellHtml = '<a class="btn btn-sm btn-info btn-block" href="branch/' + val.id + '" data-toggle="tooltip" title="{{ trans("usersmanagement.tooltips.edit") }}">{!! trans("organization.buttons.edit") !!}</a>';
                            let deleteCellHtml = '<form method="POST" action="branch/delete/'+ val.id +'" accept-charset="UTF-8" data-toggle="tooltip" title="Delete">' +
                                    '{!! Form::hidden("_method", "DELETE") !!}' +
                                    '{!! csrf_field() !!}' +
                                    '<button class="btn btn-danger btn-sm" type="button" style="width: 100%;" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Branch" data-message="{!! trans("usersmanagement.modals.delete_user_message", ["user" => "'+val.name+'"]) !!}">' +
                                        '{!! trans("usersmanagement.buttons.delete") !!}' +
                                    '</button>' +
                                '</form>';


                            resultsContainer.append('<tr>' +
                                '<td>' + val.id + '</td>' +
                                '<td>' + val.branch_name + '</td>' +
                                '<td class="hidden-xs">' + val.email + '</td>' +
                                '<td class="hidden-xs">' + val.branch_code + '</td>' +
                                '<td class="hidden-xs">' + val.branch_type + '</td>' +
                                '<td class="hidden-sm hidden-xs"> ' + val.address  +'</td>' +
                                '<td class="hidden-sm hidden-xs hidden-md">' + val.created_at + '</td>' +
                                '<td class="hidden-sm hidden-xs hidden-md">' + val.updated_at + '</td>' +
                                '<td>' + deleteCellHtml + '</td>' +
                                '<td>' + showCellHtml + '</td>' +
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
                cardTitle.html("{!! trans('organization.showing-all-branches') !!}");
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
            cardTitle.html("{!! trans('organization.showing-all-branches') !!}");
            userPagination.show();
            usersCount.html(" ");
        });
    });
</script>
