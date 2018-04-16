$(function(){
    var Request = new Object();

    Request = GetRequest();
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
        ajax: ENV+"/Syscolumn/loadList?id="+Request['id'],
        aoColumns : [//服务器返回的数据处理 此时返回的是 {}
            { "mData": "id","sWidth": 80},
            { "mData": "colName","sWidth": 150},
            { "mData": "colTypeName","sWidth": 100},
            { "mData": "colLength","sWidth": 80},
            { "mData": "defaultValue","sWidth": 80},
            { "mData": function(obj){
                if(obj.isPk == 1 || obj.isPk == "1"){
                    return "主键";
                }else{
                    return "-";
                }
            },"sWidth": 80},
            { "mData": function(obj){
                if(obj.isHidden == 1 || obj.isHidden == "1"){
                    return "隐藏";
                }else{
                    return "-";
                }
            },"sWidth": 80},
            { "mData": "remark","sWidth": 150},
            { "mData": function(obj){
                if(obj.state == 1 || obj.state == "1"){
                    return "删除";
                }else{
                    return "-";
                }
            },"sWidth": 50},
            { "mData": "parentName","sWidth": 100},
            { "mData": function(obj){
                return '<a data-toggle="modal" data-target="#myModal"  onclick="edit('+obj.id+')" data-title="' + obj.id + '"  class="btn btn-success" href="#"><i class="icon-edit icon-white"></i>修改</a>' +'&nbsp;&nbsp;'+'<a  onclick="del('+obj.id+')"  data-title="' + obj.id + '"  class="btn btn-danger" href="#"><i class="icon-user icon-white"></i>删除</a>';
            }}
        ]
    });
})

function edit(id){
    window.location.href = ENV + '/Syscolumn/add?id='+id;
}

function del(id){
    if (window.confirm("确定删除？")){
        $.post(ENV + '/Syscolumn/delete',{id:id},function(result){
            if(result.success == true || result.success == 'true'){
                $('#datatable1').DataTable().ajax.reload();
            }else{
                alert("删除失败！");
            }
        },'json');
    }
}

function GetRequest() {
    var url = location.search; //获取url中含"?"符后的字串

    var theRequest = new Object();

    if (url.indexOf("?") != -1) {

        var str = url.substr(1);

        strs = str.split("&");

        for(var i = 0; i < strs.length; i ++) {

            theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);

        }

    }

    return theRequest;

}