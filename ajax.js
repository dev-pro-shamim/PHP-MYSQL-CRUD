
// insert Section Starts here

$("button").click(function(){
    var name = $("#name").val();
    var email =$("#email").val();
    var pass = $("#pass").val();
   

$.ajax({
    method:"POST",
    url:"insert.php",
    data:{name:name, email:email, pass:pass},
    success:function(data){
        // alert(data);
        read()
    }

});


});

// insert Section END here

// Reading Data Section Starts Here
function read(){
    var read = "";
    $.ajax({
        url:"read.php",
        method:"POST",
        data: {read:read},
        success:function(data){
            $("#tbody").html(data)
        }
    })
}

// Reading Data Section END Here

// Deleting Data Section Start Here

function Delete(userId){
    $con = confirm("Are You Sure !");
    if($con==true){
        $.ajax({
            url:"delete.php",
            method:"POST",
            data:{userId:userId},
            success:function(){
                read();
                
    
            }
    
    
        });
    }

}

// Deleting Data Section END Here

// Edit Data Section Start Here
function Edit(userId){

    $.ajax({
        url: "edit.php",
        method:"GET",
        data :{userId:userId},
        success:function(data){
            $("body").html(data);



        }





    });
   

}


// Edit Data Section END Here

// Update Query For Update Data
function UPDATE_DATA(userId){
    var name = $("#name").val();
    var email =$("#email").val();
    var pass = $("#pass").val();
   

    $.ajax({

        url:"updateQuery.php",
        method: "GET",
        data:{name:name, email:email,pass:pass,userId:userId},
        success:function(data){
            alert(data);

        }
    })
    


}

$(".read").click(function(){

    var read = "";
    $.ajax({
        url:"read.php",
        method:"POST",
        data: {read:read},
        success:function(data){
            $("#tbody").html(data)
        }
    })


});
function Home(){
    var read = "";
    $.ajax({
        url:"index.php",
        method:"POST",
        data: {read:read},
        success:function(data){
            $("body").html(data)
        }
    })

}