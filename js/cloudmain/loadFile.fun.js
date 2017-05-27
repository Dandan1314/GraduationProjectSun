/**
 * Created by Mingzhe Sun on 2017/4/25.
 */

function loadFile(dirName,share) {

    $.ajax({
        type: "post",
        url: "../../php/cloudMain/fileList.php",
        data: {
            start: 1,
            load: 20,
            dirName: dirName,
            share:share
        },
        dataType: "json",
        success: function (response, status, xhr) {
            var fileCount = response.fileCount;
            $("#fileCount").html(fileCount);
            var html = "";
            //文件总数小于20时候，全部加载
            if(fileCount <= 20){
                for(var i = 1 ; i <= fileCount ; i++){
                    html += '<div class="fileInfo mt4" id="';
                    html += i ;
                    html += '"><span class="col-lg-7 col-md-7 col-sm-7 col-xs-5 dinlineb cut ">';
                    // html += '<span class="dinlineb fileIcon fl"></span>';
                    html += '<a href="#" class="fileName dinlineb fl">';
                    html += response[i].filename;
                    html += '</a></span><span class="col-lg-3 col-md-3 col-sm-3 col-xs-4 dinlineb"><span class="fileTime pl20">';
                    html += response[i].fileUpTime;
                    html += '</span></span><span class="col-lg-2 col-md-2 col-sm-2 col-xs-3 dinlineb"><span class="fileSize">';
                    html += response[i].fileSize;
                    html += '</span></span></div>';
                }
                html += '<button type="button" class="btn btn-default btn-lg btn-block addMore mtb10 p0 color-black" id="noMore" disabled>没有更多文件了</button>';
                //文件计数并修改
                var loadNow = i - 1;
                $('#loadNow').text(loadNow);

                $('#fileList').append(html);

                if( share == null ){
                    //文件非共享，执行此处
                    fileclick();
                }else{
                    //文件共享，执行此处
                    // dirName = fujack/share
                    shareFileClick(dirName);
                }

            }
            //文件总数大于20时，先加载20个文件，然后判断剩余文件数量
            else{
                for(var i=1 ; i <= 20 ; i++){
                    html += '<div class="fileInfo mt4" id="';
                    html += i ;
                    html += '"><span class="col-lg-7 col-md-7 col-sm-7 col-xs-5 dinlineb cut ">';
                    // html += '<span class="dinlineb fileIcon fl"></span>';
                    html += '<a href="#" class="fileName dinlineb fl">';
                    html += response[i].filename;
                    html += '</a></span><span class="col-lg-3 col-md-3 col-sm-3 col-xs-4 dinlineb"><span class="fileTime pl20">';
                    html += response[i].fileUpTime;
                    html += '</span></span><span class="col-lg-2 col-md-2 col-sm-2 col-xs-3 dinlineb"><span class="fileSize">';
                    html += response[i].fileSize;
                    html += '</span></span></div>';
                }
                html += '<button type="button" class="btn btn-default btn-lg btn-block addMore mtb10 p0 color-black" id="addMore">点击加载更多</button>';
                //文件计数并修改
                var loadNow = i - 1;
                $('#loadNow').text(loadNow);

                $('#fileList').append(html);

                fileclick();

                //加载更多
                $("#addMore").click(function () {
                    //得到列表最后一个内容的ID
                    var liLength = $('.fileInfo').last().attr('id');
                    //得到总列表中未加载内容的数量
                    var liRemain = fileCount - liLength;
                    if(liRemain <= 20){

                        $.ajax({
                            type: "post",
                            url: "../../php/cloudMain/fileList.php",
                            data: {
                                start: i,
                                load: 20,
                                dirName: dirName,
                                share:share
                            },
                            dataType: "json",
                            success: function (response, status, xhr) {
                                $('.addMore').remove();
                                var forEnd = parseInt(liLength) + parseInt(liRemain);
                                html = "";
                                for( i ; i<=forEnd ; i++ ){
                                    html += '<div class="fileInfo mt4" id="';
                                    html += i ;
                                    html += '"><span class="col-lg-7 col-md-7 col-sm-7 col-xs-5 dinlineb cut ">';
                                    // html += '<span class="dinlineb fileIcon fl"></span>';
                                    html += '<a href="#" class="fileName dinlineb fl">';
                                    html += response[i].filename;
                                    html += '</a></span><span class="col-lg-3 col-md-3 col-sm-3 col-xs-4 dinlineb"><span class="fileTime pl20">';
                                    html += response[i].fileUpTime;
                                    html += '</span></span><span class="col-lg-2 col-md-2 col-sm-2 col-xs-3 dinlineb"><span class="fileSize">';
                                    html += response[i].fileSize;
                                    html += '</span></span></div>';
                                }
                                html += '<button type="button" class="btn btn-default btn-lg btn-block addMore mtb10 p0 color-black" id="noMore" disabled>没有更多文件了</button>'
                                //文件计数并修改
                                var loadNow = i - 1;
                                $('#loadNow').text(loadNow);

                                $('#fileList').append(html);

                            },
                            error: function () {
                                $('#error').modal({
                                    show:true,
                                    backdrop:true
                                });
                            }
                        });

                    }
                    //大于20，向显示更多按钮之前插入内容
                    else{
                        $.ajax({
                            type: "post",
                            url: "../../php/cloudMain/fileList.php",
                            data: {
                                start: i,
                                load: 20,
                                dirName: dirName,
                                share:share
                            },
                            dataType: "json",
                            success: function (response, status, xhr) {
                                var forEnd = parseInt(i) + 19;
                                html = "";
                                for( i ; i <= forEnd ; i++ ){
                                    html += '<div class="fileInfo mt4" id="';
                                    html += i ;
                                    html += '"><span class="col-lg-7 col-md-7 col-sm-7 col-xs-5 dinlineb cut ">';
                                    // html += '<span class="dinlineb fileIcon fl"></span>';
                                    html += '<a href="#" class="fileName dinlineb fl">';
                                    html += response[i].filename;
                                    html += '</a></span><span class="col-lg-3 col-md-3 col-sm-3 col-xs-4 dinlineb"><span class="fileTime pl20">';
                                    html += response[i].fileUpTime;
                                    html += '</span></span><span class="col-lg-2 col-md-2 col-sm-2 col-xs-3 dinlineb"><span class="fileSize">';
                                    html += response[i].fileSize;
                                    html += '</span></span></div>';
                                }
                                //文件计数并修改
                                var loadNow = i - 1;
                                $('#loadNow').text(loadNow);

                                $('#addMore').before(html);

                            },
                            error: function () {
                                $('#error').modal({
                                    show:true,
                                    backdrop:true
                                });
                            }
                        });
                    };
                });

            };
        },
        error: function () {
            $('#error').modal({
                show:true,
                backdrop:true
            });
        }
    });

};