<head>
    <style type="text/css">
        .pagination>li{ display:inline; }

        .pagination>li>a,.pagination>li>span{
            position:relative;
            float:left;
            padding:6px 12px;
            margin-left:-1px;
            line-height:1.42857143;
            color:#337ab7;
            text-decoration:none;
            background-color:#fff;
            border:1px solid #ddd;
        }

        .pagination>li:first-child>a,.pagination>li:first-child>span{
            margin-left:0;
            border-top-left-radius:4px;
            border-bottom-left-radius:4px
        }

        .pagination>li:last-child>a,.pagination>li:last-child>span{
            border-top-right-radius:4px;
            border-bottom-right-radius:4px
        }

        .pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{
            z-index:2;
            color:#23527c;
            background-color:#eee;
            border-color:#ddd
        }

        .pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{
            z-index:3;
            color:#fff;
            cursor:default;
            background-color:#337ab7;
            border-color:#337ab7
        }

        .pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{
            color:#777;
            cursor:not-allowed;
            background-color:#fff;
            border-color:#ddd
        }

        .pagination-lg>li>a,.pagination-lg>li>span{
            padding:10px 16px;
            font-size:18px;
            line-height:1.3333333;
        }

        .pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{
            border-top-left-radius:6px;
            border-bottom-left-radius:6px
        }

        .pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{
            border-top-right-radius:6px;
            border-bottom-right-radius:6px
        }

         .pagination-sm>li>a,.pagination-sm>li>span{
             padding:5px 10px;
             font-size:12px;
             line-height:1.5
        }

         .pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{
             border-top-left-radius:3px;
             border-bottom-left-radius:3px
         }

         .pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{
             border-top-right-radius:3px;
             border-bottom-right-radius:3px
         }

        li.disabled>a{ color:#777 }

        .nav>li.disabled>a:focus,.nav>li.disabled>a:hover{
         color:#777;
         text-decoration:none;
         cursor:not-allowed;
         background-color:transparent
        }
    </style>
</head>

<body>
    <div class="paginator">    
        <?php  

            $count = "SELECT COUNT(*) As total_records FROM products";     
            $rs_result = mysqli_query($con, $count);     
            $total_records = mysqli_fetch_array($rs_result);     
            $total_records = $total_records['total_records'];    
            $total_pages = ceil($total_records / $record_per_page) - 1;
            $second_last = $total_pages - 1; 
                  
            echo "</br>";     
        ?>  

        <ul class="pagination">
            <?php if($page > 1){
                echo "<li><a href='?page=1'>First Page</a></li>";
            } ?>
            
        <li <?php if($page <= 1){ echo "class='disabled'"; } ?>>
            <a <?php if($page > 1){
                echo "href='?page=$previous'";
            } ?>>Previous</a>
        </li>

        <?php
            if ($total_pages <= 10){     
                for ($counter = 1; $counter <= $total_pages; $counter++){
                    if ($counter == $page) {
                        echo "<li class='active'><a>$counter</a></li>"; 
                    } else {
                        echo "<li><a href='?page=$counter'>$counter</a></li>";
                    }
                }
            } elseif ($total_pages > 10){
                if($page <= 4) {            
                    for ($counter = 1; $counter < 8; $counter++){        
                        if ($counter == $page) {
                           echo "<li class='active'><a>$counter</a></li>";  
                        } else {
                           echo "<li><a href='?page=$counter'>$counter</a></li>";
                        }
                    }

                    echo "<li><a>...</a></li>";
                    echo "<li><a href='?page=$second_last'>$second_last</a></li>";
                    echo "<li><a href='?page=$total_pages'>$total_pages</a></li>";

                } elseif($page > 4 && $page < $total_pages - 4) {        
                    echo "<li><a href='?page=1'>1</a></li>";
                    echo "<li><a href='?page=2'>2</a></li>";
                    echo "<li><a>...</a></li>";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {           
                        if ($counter == $page) {
                            echo "<li class='active'><a>$counter</a></li>"; 
                        } else {
                            echo "<li><a href='?page=$counter'>$counter</a></li>";
                        }                  
                    }
                    echo "<li><a>...</a></li>";
                    echo "<li><a href='?page=$second_last'>$second_last</a></li>";
                    echo "<li><a href='?page=$total_pages'>$total_pages</a></li>";      
                } else {
                    echo "<li><a href='?page=1'>1</a></li>";
                    echo "<li><a href='?page=2'>2</a></li>";
                    echo "<li><a>...</a></li>";

                    for ($counter = $total_pages - 6; $counter <= $total_pages; $counter++) {
                        if ($counter == $page) {
                            echo "<li class='active'><a>$counter</a></li>"; 
                        } else {
                            echo "<li><a href='?page=$counter'>$counter</a></li>";
                        }                   
                    }
                }
            }
        ?>
            
        <li <?php if($page >= $total_pages){ echo "class='disabled'";
        } ?>>
            <a <?php if($page < $total_pages) {
                echo "href='?page=$next'";
            } ?>>Next</a>
        </li>

            <?php if($page < $total_pages){
                echo "<li><a href='?page=$total_pages'>Last</a></li>";
            } ?>
        </ul>     
    </div>
</body>