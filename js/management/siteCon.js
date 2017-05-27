/**
 * Created by Mingzhe Sun on 2017/3/27.
 */

$(function () {

    //获取数据库的内容并填充
    $.ajax({
        type: "post",
        url: "../../php/management/siteCon.php",
        dataType:"json",
        success:function (response,status,xhr) {

            var Domain = response.DomainName;
            var SiteName = response.SiteName;
            var SpaceReserved = response.SpaceReserved;

            $('#siteName').val(SiteName);
            $('#domainName').val(Domain);
            $('#spaceReserved').val(SpaceReserved);

        },
        error:function () {
            alert('连接失败');
        }

    })
});