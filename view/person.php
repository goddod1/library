<div style="background-color: rgb(187, 194, 200);">
<div class="scrollmenu" style="display: flex;">
  <div style="display: flex;
  align-items: center; background-color: green  ;"><a style=" font-size: 17px; background-color: rgba(0, 66, 0, 0.766);" href="#" onclick="openPopup()"><img src="user-add-svgrepo-com.png" width="25" height="25"></a><a style=" font-size: 17px; color: white;" href="#" onclick="openPopup()">ADD</a></div>
  <div style="margin-left:1%; display: flex; margin-bottom: 2%; margin-top:1%;"><a style=" font-size: 17px; background-color: rgba(0, 66, 0, 0.766);" href="?option=person"><img src="table-svgrepo-com (1).png" width="25" height="25"></a><a style="font-size: 17px; color: white;" href="?option=person">MANAGE</a></div>
  <!-- <a href="?option=book"><img src="book-svg
  repo-com.png" wwidth="25" height="25"></a> -->
    <button class="btn-person">
        <a class="btn-add" href="#" onclick="openPopup()"><img class="icon--img" src="user-add-svgrepo-com.png" width="25" height="25"></a>
        
        <a class="title--btn" href="#" onclick="openPopup()">ADD</a>
    </button>
</div>

<div style="margin-top: -2.7%;">
            <form method="post" class="form">
                <input class="inputsearch" type="search"
                    name="username"><button class="button"><img src="search-magnifying-glass-svgrepo-com (1).png" width="25" height="25"></button>
                    <!-- <input style="font-size: 27px;" type="image" src="search-square-svgrepo-com.png" alt="Submit" width="45" height="45" name="search"> -->
                    
                    <input class="inputsubmit" type="submit" name="delete" value="DELETE">
            </form>
                
</div>
<p></p>
<div class="image">
    <img src="Screenshot 2023-06-22 224226.png" width="1365" height="650">
</div>
</div>

<div class="popup-wrapper" id="popup-wrapper" style="text-align: center;">
    <div class="popup" style="border-radius: 40px; background-image: url('https://i0.wp.com/thatnhucuocsong.com.vn/wp-content/uploads/2021/12/hinh-anh-bau-troi.jpg?ssl=1');
" ;>
        <span class="close" onclick="closePopup()">&times;</span>
        <form method="post">
            <section class="class">
                <label style="color: white;">NAME</label><br><input
                    style="border-radius: 100px; width:80%; height: 40px; font-size: 27px;" type="text"
                    name="username"><br>
            </section>
            <section class="class">
                <label style="color: white;">ma SV: </label><br><input
                    style="border-radius: 100px; width:80%; height: 40px; font-size: 27px;" type="text" type="text"
                    name="maSV">
            </section>

            <section class="class">
                <input class="btn btn-sm btn-danger"
                    style="margin-top:10%; border-radius: 40px; background-color: aqua; border:0px; font-size: 29px; color: white; width: 50%"
                    type="submit" value="create" name="create">
            </section>
        </form>
    </div>
</div>

