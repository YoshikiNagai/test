function printWord(no, callback){
    document.write("問" +no+ "の実行結果<br><br>");
    document.write("ココカラ――――――――――――<br>");
    callback();
    document.write("――――――――――――ココマデ<br><br>");
}

function no1(){
    for(let i = 0; i < 5; i++){
        document.write("★");
    }
    document.write("<br>");
}

function no2(){
    for(let j = 0; j < 2; j++){
        for(let i = 0; i < 3; i++){
            document.write("★");
        }
        document.write("<br>");    
    } 
}

function no3(){
    for(let j = 0; j < 2; j++){
        for(let i = 0; i < 5; i++){
            document.write("☆");
        }
        document.write("<br>");
    }
}

function no4(){
    for(let j = 0; j < 4; j++){
        for(let i = 0; i < 5; i++){
            document.write("★");
        }
        document.write("<br>");
    }
}

function no5(){
    for(let j = 0; j < 4; j++){
        for(let i = 0; i < 3; i++){
            document.write("★");
        }
        document.write("<br>");
    }
}

function no6(){
    for(let j = 0; j < 3; j++){
        for(let i = 0; i < 3; i++){
            if(i % 2 == 0){
                document.write("★");   
            }else{
                document.write("☆");
            }
        }
        document.write("<br>");
    }
}

function no7(){
    for(let j = 0; j < 3; j++){
        for(let i = 0; i < 5; i++){
            if(i % 2 == 0){
                document.write("★");   
            }else{
                document.write("☆");
            }
        }
        document.write("<br>");
    }
}

function no8(){
    for(let i = 0; i < 5; i++){
        for(let j = 0; j < i + 1; j++){
            document.write("★");
        }
        document.write("<br>");
    }
}

let i = 1;
printWord(i++, no1);
printWord(i++, no2);
printWord(i++, no3);
printWord(i++, no4);
printWord(i++, no5);
printWord(i++, no6);
printWord(i++, no7);
printWord(i++, no8);


