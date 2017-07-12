<?php
    if ($_FILES['file']['error'] > 0) {
        echo '上传遇到错误,';
        switch ($_FILES['file']['error'])
        {
            case 1:
                echo '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值';
                break;
            case 2:
                echo '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
                break;
            case 3:
                echo '文件只有部分被上传';
                break;
            case 4:
                echo '没有文件被上传';
                break;
            case 5:
                echo '上传文件大小为0';
                break;
        }
    }
    else{
        //显示上传文件的信息
        echo '文件名为：'.$_FILES['file']['name'].'<br/>';
        echo '文件类型为：'.$_FILES['file']['type'].'<br/>';
        echo '文件大小为：'.$_FILES['file']['size'].'字节<br/>';

        //设置文件的保存路径
        //如果文件是中文文件名，则需要使用iconv()函数将文件名转换为gbk编码，否则将会出现乱码
        $dir = 'upload/'.iconv('UTF-8','gbk',$_FILES['file']['name']);

        //将用户上传的文件保存到upload目录中
        if (move_uploaded_file($_FILES['file']['tmp_name'],$dir)){
            echo '文件上传成功';
        }
        else{
            echo '文件上传失败';
        }
    }
