<div style="clear:both">
<ul class="list_trang">


      <?php 
           for ($i=1; $i <= $totalPage; $i++)
           if($i == $page) {
            echo " <li style=' background:  #94c9de';><a href = 'ds_sanpham.php?p=$i' style=' color: white; '> $i </a></li> ";
           } else{
            echo "<li><a href = 'ds_sanpham.php?p=$i' '> $i </a></li>";
           }
          ?>
   
</ul>
<style>
    ul.list_trang{
        padding: 10px;
        margin: 0;
        list-style: none;
    }
    ul.list_trang li{
        float: left;
      padding: 5px 13px;
        margin: 5px;
        background: #0298cf;
        display: block;
        border-radius: 10px;
    }
    ul.list_trang li a{
        color: black;
        text-align: center;
        text-decoration: none; 
      
    }
</style>
</div>