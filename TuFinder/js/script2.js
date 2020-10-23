
$(document).ready(function(){
    var link= "getTeachers.php"
    var rowToStart=3;
$('.loadMore').click(function(){
 
        $.post(link,
            {
                message: rowToStart
            },
            function(data, status){                
                // console.log(data);
                $(data).appendTo(".tichersList");

       
            })
    

});
});