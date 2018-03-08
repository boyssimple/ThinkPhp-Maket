$(function(){
    $('#datatable1').DataTable({
        bSort: false,      //是否排序
        bPaginate: true,  //是否分页
        bFilter: true,    //是否查询
        bInfo: true,      //是否显示基本信息
        iDisplayLength: 20,
        bAutoWidth: false, //是否自适应宽度
        aLengthMenu: [20, 50 , 100],
        language: {        //把英文显示变为中文显示
            "sProcessing": "处理中...",
            "sLengthMenu": "显示 _MENU_ 项结果",
            "sZeroRecords": "没有匹配结果",
            "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
            "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
            "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
            "sInfoPostFix": "",
            "sSearch": "搜索:",
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
        ajax: ENV+"/Sysmenu/loadList",
        aoColumns : [//服务器返回的数据处理 此时返回的是 {}
            { "mData": "id","sWidth": 80},
            { "mData": "name","sWidth": 200},
            { "mData": "menuUrl","sWidth": 200},
            { "mData": function(obj){
                if(obj.isDelete == 1 || obj.isDelete == '1'){
                    return '已删除';
                }else{
                    return '-';
                }
            },"sWidth": 50},
            { "mData": "remark","sWidth": 100},
            { "mData": "parentName","sWidth": 100},
            { "mData": "orderNo","sWidth": 80},
            { "mData": function(obj){
                return '<a data-toggle="modal" data-target="#myModal"  onclick="edit('+obj.id+')" data-title="' + obj.id + '"  class="btn btn-success" href="#"><i class="icon-edit icon-white"></i>修改</a>' +'&nbsp;&nbsp;'+'<a  onclick="del('+obj.id+')"  data-title="' + obj.id + '"  class="btn btn-danger" href="#"><i class="icon-user icon-white"></i>删除</a>';
            }}
        ]
    });
})

function edit(id){
    window.location.href = ENV + '/Sysmenu/add?id='+id;
}

function del(id){
    if (window.confirm("确定删除？")){
        $.post(ENV + '/Sysmenu/delete',{id:id},function(result){
            if(result.success == true || result.success == 'true'){
                $('#datatable1').DataTable().ajax.reload();
            }else{
                alert("删除失败！");
            }
        },'json');
    }
}