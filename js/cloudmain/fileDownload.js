/**
 * Created by Mingzhe Sun on 2017/4/30.
 */


function fileclick() {

    $('.fileName').click(function () {

        var fileInfo = $(this).parent().parent('.fileInfo');

        var fileTime = fileInfo.children().children('.fileTime').text();

        var fileSize = fileInfo.children().children('.fileSize').text();

        if (fileTime === fileSize) {

            var urlLength = $('.userUrl').length - 1;
            var clkDirName = $(this).text();
            var dirName = "";
            var userUrl = "";

            if (urlLength != -2) {

                for (var i = 0; i <= urlLength; i++) {
                    dirName += $('.userUrl').eq(i).text() + '/';
                }

                //修改路径显示
                dirName += clkDirName;

                userUrl += '<span class="color-white"> > </span>';
                userUrl += '<span href="#" class="userUrl color-white f12">';
                userUrl += clkDirName;
                userUrl += '</span>';

                $('#userUrl').append(userUrl);
                $('#fileList').text("");
                loadFile(dirName);
            }


        } else {

            var fileName = $(this).text();
            var urlLength = $('.userUrl').length - 1;
            var dirName = "";
            var userUrl = "";

            for (var i = 0; i <= urlLength; i++) {
                dirName += $('.userUrl').eq(i).text() + '/';
            }

            var fileUrl = dirName + fileName;

            var url = "../../php/cloudMain/dlFile.php?fileName=" + fileUrl;

            window.location.href = url;

        }

    });

};

function shareFileClick(dirName) {

    $('.fileName').click(function () {


        var fileName = $(this).text();
        var fileUrl = dirName + "/" + fileName;

        var url = "../../php/cloudMain/dlShareFile.php?fileName=" + fileUrl;

        window.location.href = url;

    });
}