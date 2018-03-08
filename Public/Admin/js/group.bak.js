$(function(){
    $('#datatable1').DataTable({
        bSort: false,      //是否排序
        bPaginate: true,  //是否分页
        bFilter: true,    //是否查询
        bInfo: true,      //是否显示基本信息
        iDisplayLength: 10,
        aLengthMenu: [10, 20, 50],
        bAutoWidth: false, //是否自适应宽度
        language: {        //把英文显示变为中文显示
            "sProcessing": "处理中...",
            "sLengthMenu": "显示 _MENU_ 项结果",
            "sZeroRecords": "没有匹配结果",
            "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
            "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
            "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
            "sInfoPostFix": "",
            "sSearch": "搜索项目:",
            "sUrl": "",
            "sEmptyTable": "表中数据为空",
            "sLoadingRecords": "载入中...",
            "sInfoThousands": ",",
            "oPaginate": {
                "sFirst": "首页",
                "sPrevious": "上页",
                "sNext": "下页",
                "sLast": "末页"
            },
            "oAria": {
                "sSortAscending": ": 以升序排列此列",
                "sSortDescending": ": 以降序排列此列"
            }
        },
        serverSide: true,
        ajax: ENV+"/Group/loadList",
        "aoColumns": [//服务器返回的数据处理 此时返回的是 {}
            { "mData": "id","sWidth": 50},
            { "mData": "groupName","sWidth": 150},
            { "mData": "parentId","sWidth": 150},
            { "mData": "remark","sWidth": 250},
            { "mData": function(obj){
                if(obj.Isshare){
                    return "共享";
                }else{
                    return "个人";
                }
            }},
            { "mData": function(obj){
                return '<a data-toggle="modal" data-target="#myModal"  data-title="' + obj.Id + '"  class="btn btn-success" href="#"><i class="icon-edit icon-white"></i>修改</a>' +'&nbsp;&nbsp;'+'<a   data-title="' + obj.Id + '"  class="btn btn-danger" href="#"><i class="icon-user icon-white"></i>删除</a>';
            }}
        ],
        "fnServerParams": function ( aoData ) {//向服务器传额外的参数
            aoData.push( { "name": "sid", "value": sid } );
        }
        // columns:[
        //     {title:'111'},
        // ]
    });
})