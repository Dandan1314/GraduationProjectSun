/**
 * Created by Mingzhe Sun on 2017/5/11.
 */

$(function () {

    $.ajax({
        type: "post",
        url: "../../php/management/spaceManage.php",
        data: {},
        dataType: "json",
        success: function (response, xhr, status) {
            var deviceName = response.deviceName; //设备名称
            var deviceSize = response.deviceSize/1024 + "G"; //磁盘总大小
            var LinuxSpace = response.LinuxSpace/10; //Linux系统占用的空间
            var ownCloudSpaceCount = response.ownCloudSpaceCount/10; //私有云系统占用的空间
            var spaceReserved = response.spaceReserved/10; //保留空间
            var userSpaceCount = response.userSpaceCount/10; //用户空间
            var residualSpace = response.residualSpace/10; //剩余空间

            var spaceInfo = [['Linux系统', LinuxSpace], ['私有云', ownCloudSpaceCount], ['保留空间', spaceReserved], ['用户空间', userSpaceCount], ['剩余空间', residualSpace]];

            plot1 = $.jqplot('spaceInfo', [spaceInfo], {
                title: '设备名:' + deviceName +'　总大小:'+ deviceSize,//设置饼状图的标题
                seriesDefaults: {
                    fill: true,
                    showMarker: false,
                    shadow: false,
                    renderer: $.jqplot.PieRenderer,
                    rendererOptions: {
                        diameter: undefined, // 设置饼的直径
                        padding: 20, // 饼距离其分类名称框或者图表边框的距离，变相该表饼的直径
                        sliceMargin: 6, // 饼的每个部分之间的距离
                        fill: true, // 设置饼的每部分被填充的状态
                        shadow: true, //为饼的每个部分的边框设置阴影，以突出其立体效果
                        shadowOffset: 1, //设置阴影区域偏移出饼的每部分边框的距离
                        shadowDepth: 6, // 设置阴影区域的深度
                        shadowAlpha: 0.07 // 设置阴影区域的透明度
                    }
                },
                legend: {
                    show: true,//设置是否出现分类名称框（即所有分类的名称出现在图的某个位置）
                    location: 'e', // 分类名称框出现位置, nw, n, ne, e, se, s, sw, w.
                    xoffset: 12, // 分类名称框距图表区域上边框的距离（单位px）
                    yoffset: 12, // 分类名称框距图表区域左边框的距离(单位px)
                }
            });


        },
        error: function () {
            // alert('error');
        }
    });

});