define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'datepricestock/index' + location.search,
                    add_url: 'datepricestock/add',
                    edit_url: 'datepricestock/edit',
                    del_url: 'datepricestock/del',
                    multi_url: 'datepricestock/multi',
                    import_url: 'datepricestock/import',
                    table: 'datepricestock',
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
                        {field: 'departureDate', title: __('Departuredate'), operate:'RANGE', addclass:'datetimerange', autocomplete:false},
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