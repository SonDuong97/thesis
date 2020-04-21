@extends('layouts.default')

@section('css')
    <!-- Bootstrap CSS -->
@endsection

@section('content')
    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="{{route('index')}}">{{__('layouts/header.home')}}</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">{{__('layouts/header.uploadLesson')}}</span>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <a href="{{route('expert.rulesType2.create')}}" class="btn btn-primary mb-3">{{__('knowledge.new')}}</a>
            <div class="table-responsive small">
                <table class="table table-bordered table-hover" id="knowledgeTable">
                    <thead>
                    <tr>
                        <th>{{__('knowledge.no')}}</th>
                        <th>{{__('knowledge.code')}}</th>
                        <th>{{__('knowledge.premise')}}</th>
                        <th>{{__('knowledge.conclusion')}}</th>
                        <th>{{__('knowledge.reliability')}}</th>
                        <th>{{__('knowledge.type')}}</th>
                        <th>{{__('knowledge.status')}}</th>
                        <th width="10%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // $(document).ready(function() {
        var table = $('#knowledgeTable').DataTable({
            stateSave: true,
            searching: true,
            serverSide: true,
            lengthChange: true,
            language: {
                "lengthMenu": "Hiện thị _MENU_",
                "zeroRecords": "Nothing found - sorry",
                "info": "Hiện thị trang _PAGE_ trong _PAGES_",
                "infoEmpty": "Không có bản ghi nào",
                "infoFiltered": "(Lọc trong _MAX_ bản ghi)",
                "search": "Tìm kiếm:",
                "loadingRecords": "Tải dữ liệu...",
                "processing": "Đang xử lý...",
                "zeroRecords": "Không tìm thấy kết quả",
                "paginate": {
                    "first": "Trang đầu",
                    "last": "Trang cuối",
                    "next": "Trang sau",
                    "previous": "Trang trước"
                },
            },
            order: [[ 1, 'asc' ]],
            ajax: {
                url: '{{route('expert.datatables.knowledge.rulesType2')}}',
            },
            columns: [
                {data: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {data: 'code'},
                {data: 'premise'},
                {data: 'conclusion'},
                {data: 'reliability'},
                {data: 'type'},
                {data: 'status', "searchable": false},
                {data: 'action', "searchable": false},

            ],

        });

        $('#knowledgeTable').on("click", ':checkbox', function() {
            var status = this;
            var id = $(status).attr("data-id");
            var value = $(status).prop("checked");
            $.confirm({
                title: '{{__('knowledge.confirm')}}!',
                content: '{{__('knowledge.confirmMessage')}}',
                buttons: {
                    '{{__('knowledge.confirm')}}': function () {
                        $.ajax({
                            type: "GET",
                            url: '{{route('expert.knowledge.changing-status')}}',
                            dataType: "json",
                            data: {
                                id : id,
                                status : value? 1 : 0
                            },
                            success: function (data) {
                                table.ajax.reload();
                                $.alert(data.success);
                            },
                            error: function (data) {
                                $.alert(data.error);
                            }
                        });
                    },
                    '{{__('knowledge.cancel')}}': function () {
                        $(status).prop("checked", !value);
                    }
                }
            });
        });
    </script>
@endsection
