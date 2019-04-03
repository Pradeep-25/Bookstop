function bookSearch(){
    var search= document.getElementById('search').value
    
    if(search == '')
        {
            alert("Please enter something in the field first")
        }
    else{
        var url=''
        var img=''
        var title=''
        var author=''
    
    
    document.getElementById('results').innerHTML=""
    console.log(search)
    
    $.ajax({
        url:"https://www.googleapis.com/books/v1/volumes?q=" + search,
        dataType:"jsonp",
        
        success: function(data){
        for(i=0 ; i<data.items.length; i++){
            
            results.innerHTML += '<br><br><h5>Title: ' + data.items[i].volumeInfo.title + "</h5>"
            
            results.innerHTML += '<h5>By: ' + data.items[i].volumeInfo.authors + "</h5>"
            
            results.innerHTML += '<img  src= ' + data.items[i].volumeInfo.imageLinks.thumbnail + "><br>"
            results.innerHTML +='<br><a href='+data.items[i].volumeInfo.infoLink+'><button id="imagebutton" >Read More</button></a>';
            
            
           // results.innerHTML += '<img class="aligning card z-depth-5" id="dynamic"><br><a href=' +response.items[i].volumeInfo.infoLink  +'><button id="imagebutton" class="btn red aligning">Read More</button></a>');
            
            //url=response.items[i].volumeInfo.imageLinks.thumbnail;
            
           //title=$('<h5 class="center-align black-text"> '+data.items[i].volumeInfo.title + '</h5>');
            
            //author=$('<h5 class="center-align black-text"> '+data.items[i].volumeInfo.authors + '</h5>');
            
            //title.appendTo("#result");
            //author.appendTo("#result");
            
            //img=$('<img class="aligning card z-depth-5"  id="dynamic" ><br><a href=' +response.items[i].volumeInfo.infoLink + )
        }
    },
           type: 'GET'
    });
        
    }
}
document.getElementById('button').addEventListener('click',bookSearch,false)
