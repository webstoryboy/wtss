<?php
    include "../connect/connect.php";

    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPassC'];
    $youName = $_POST['youName'];
    $youBirth = $_POST['youBirth'];
    $youNumber = $_POST['youNumber'];
    $regTime = time();


    // 데이터 입력
    // $sql = "INSERT INTO myMember(youEmail, youName, youPass, youBirth, youNumber, regTime) 
    //         VALUES('$youEmail', '$youName', '$youPass', '$youBirth', '$youNumber', '$regTime')";

    // $result = $connect -> query($sql);

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    
    //echo $youEmail, $youPass, $youPassC, $youName, $youBirth, $youNumber, $regTime;

    
    
    //유효성 검사
    //이메일 검사 : 정규식 표현
    // $check_email = preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $youEmail);

    // if( $check_email == false ){
    //     echo "이메일이 잘못되었습니다. <br> 올바른 이메일을 적어주세요!";
    // }

    
    //이메일 검사 : 내장 함수
    if( !filter_var($youEmail, FILTER_VALIDATE_EMAIL) ){
        msg("이메일이 잘못되었습니다. <br> 올바른 이메일을 적어주세요!");
    }

    //비밀번호 
    if( $youPass !== $youPassC ){
        msg("비밀번호가 일치하지 않습니다. <br> 다시 한번 확인해주세요!");
    }

    //비밀번호 암호화
    //$youPass = sha1('web'.$youPass);

    //이름 검사
    $check_name = preg_match("/^[가-힣]{1,}$/", $youName);

    if( $check_name == false ){
        msg("이름이 정확하지 않습니다. <br> 한글로 적어주세요!");
    }

    //생년월일 유효성 검사
    $check_birth = preg_match("/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $youBirth);

    if( $check_birth == false ){
        msg("생년월일이 잘못되었습니다. <br> 올바른 생년월일(YYYY-MM-DD) 적어주세요!");
    }

    //휴대폰 번호 유효성 검사
    $check_number = preg_match("/^(010|011|016|017|018|019)-[0-9]{3,4}-[0-9]{4}/", $youNumber);

    if( $check_number == false ){
        msg("번호가 잘못되었습니다. <br> 올바른 번호(000-0000-0000)를 적어주세요!");
    }

    //이메일 중복 검사
    $isEmailCheck = false;

    $sql = "SELECT youEmail FROM myMember WHERE youEmail = '$youEmail'";
    $result = $connect -> query($sql);

    if( $result ) {
        $count =  $result -> num_rows;

        //echo $count;

        if( $count == 0 ){
            $isEmailCheck = true;
        } else {
            msg("이미 존재하는 이메일입니다. 로그인을 해주세요!");
        }
    } else {
        msg("에러 발생01: 관리자에게 문의하세요");
    }


    //++ 데이터 입력 ++
    // $sql = "INSERT INTO myMember(youEmail, youName, youPass, youBirth, youNumber, regTime) 
    //         VALUES('$youEmail', '$youName', '$youPass', '$youBirth', '$youNumber', '$regTime')";

    // $result = $connect -> query($sql);


    if( $isEmailCheck == true ){
        $sql = "INSERT INTO myMember(youEmail, youName, youPass, youBirth, youNumber, regTime) 
            VALUES('$youEmail', '$youName', '$youPass', '$youBirth', '$youNumber', '$regTime')";

        $result = $connect -> query($sql);

        if( $result ){
            msg('회원가입을 축하합니다. 로그인해주세요!') ;
            $_SESSION['memberID'] = $connect -> insert_id;
            $_SESSION['youName'] = $youName;
        } else {
            msg("에러 발생: error02");
        }
    }

    // if( $result ){
    //     echo "good";
    // } else {
    //     echo "bad";
    // }
?>