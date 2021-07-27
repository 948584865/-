define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'datepricestocks/index' + location.search,
                    add_url: 'datepricestocks/add',
                    edit_url: 'datepricestocks/edit',
                    del_url: 'datepricestocks/del',
                    multi_url: 'datepricestocks/multi',
                    import_url: 'datepricestocks/import',
                    table: 'datepricestocks',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'product_id', title: __('Product_id')},
                        {field: 'departuredatebegin', title: __('Departuredatebegin'), operate:'RANGE', addclass:'datetimerange', autocomplete:false},
                        {field: 'departuredateend', title: __('Departuredateend'), operate:'RANGE', addclass:'datetimerange', autocomplete:false},
                        {field: 'price', title: __('Price'), operate:'BETWEEN'},
                        {field: 'stork', title: __('Stork')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});