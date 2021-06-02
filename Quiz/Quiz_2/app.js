function getContent(pageName){
    $.ajax({
        type:'get',
        url:'actions.php',
        data: {
            page: pageName
        },
        success: function(data){
            $('#content').html(data);
        }
    });
}

function userRegister(){
    var username = $("#user_name").val();
    var email = $("#user_email").val();
    var password = $("#user_password").val();
    console.log(username);
    if(username != "" && email != "" && password != ""){
        $.ajax({
            type:"post",
            url: "actions.php",
            data:{
                reason: "register",
                user_name: username,
                user_email: email,
                user_password: password
            },
            success :function(responce){
                $("#addResponse").html(responce);
            }
        })
    }else{
        $("#addResponse").html("No Empty Fields");
    }
    
}

function getPosts(){

    $.ajax({
        type:"post",
        url:"actions.php",
        data:{
            reason : "BooksInfo"
        },
        success: function(responce){
            var toDisplay = `<table><tr>`;
            Object.keys(JSON.parse(responce)[0]).forEach(
                key => toDisplay += `<th>${key}</th>`
            );
            toDisplay += `<th>Actions</th></tr>`;
            JSON.parse(responce).forEach(book => {
                toDisplay += `<tr>`;
                Object.values(book).forEach(
                    element => toDisplay += `<td>${element}</td>`
                );
                    
                toDisplay += `<td><button onclick="update(${book['id']})">edit</button> <button onclick="remove(${book['id']})">remove</button></td></tr>`;
            });
            toDisplay += `</table>`;

            $('#postWrap').html(toDisplay);
        }
    })
}

function update(id){
    $.ajax({
        type:"post",
        url: "Components/update.php",
        data: {
            reason: "update",
            product_id : id
        },
        success: function(responce){
            $('#content').html(responce);
        }
        
    })
}


function remove(id){
    
    $.ajax({
        type: "post",
        url: "actions.php",
        data: {
            reason: "delete",
            id : id 
        },
        success: function(){
            getPosts();
        }
    })
}

function updateBooksInfo(){
    var id = $('#id').val();
    var name = $('#BookName').val();
    var price = $('#PageNumber').val();
    var count = $('#Price').val();
    var desc = $('#BarCode').val();
    var maker = $('#Author').val();

    if(name != ""){
        $.ajax({
            type:"post",
            url:"actions.php",
            data: {
                reason:"update",
                id: id,
                BookName: book,
                PageNumber: quantity,
                Price: price,
                BarCode: price,
                Author: author
            },
            success: function(responce){
                getContent('posts.php');
            }
        });
    }
}


function uploadBooksInfo(){
    var name = $('#BookName').val();
    var price = $('#PageNumber').val();
    var count = $('#Price').val();
    var desc = $('#BarCode').val();
    var maker = $('#Author').val();

    if(name != ""){
        $.ajax({
            type:"post",
            url:"actions.php",
            data: {
                reason:"upload",
                BookName: book,
                PageNumber: quantity,
                Price: price,
                BarCode: price,
                Author: author
            },
            success: function(responce){
                $("#addResponse").html(responce);
            }
        });
    } else{
        $('#addResponse').html("Name Can not be empty!");
    }
}

getContent("posts.php");