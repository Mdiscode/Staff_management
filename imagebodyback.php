<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="empcss/table.css">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="empcss/admin.css"> -->
    <!-- <link rel="stylesheet" href="empcss/usercss.css"> -->
    <!-- <style>
        *{
            margin: 0;
            padding: 0;
            font-family:sans-serif;
        }
        .banner{
            width:100%;
            height:100vh;
            position:relative;
            overflow:hidden;
        }
        .slider{
            width:100%;
            height:100vh;
            position:absolute;
            top:0;
        }
        .sliding{
            width:100%;
            height:100%;
            
        }
        .overlay{
            width:100%;
            height:100vh;
            position:absolute;
            /* background:white; */
            background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
            /* opacity:0.8; */
            top:0;
        }
        .hello{
            width:60%;
            margin:160px auto 0;
            text-align:center;
            background:blue;
        }
    </style> -->
    <style>
        /* *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
        }
             
        .container45{
            min-height:100vh;
            margin-top:1.5rem;
            display:flex;
            justify-content:center;
            align-items:center;
            background:url(image/img/img4.avif) center /cover;
        
        }
        main.table{
            width:92vw;
            height:80vh;
            background:#fff5;
            backdrop-filter:blur(7px);
            box-shadow:0 .4rem .8rem #0005;
            border-radius: .8rem;
            overflow:auto;
        }

        .table_header{
            width:100%;
            height:10%;
            background-color:#fff4;
            padding: .8rem 1rem;
        }
          .table_body{
            width:95%;
            max-height:cal(89% - .8rem);
            background:#fffb;
            margin: .8rem auto;
            border-radius: .6rem;
            overflow:auto;
          }
         
        .table::-webkit-scrollbar{
            width:0.2rem;
            height:0.5rem;
        }
        .table::-webkit-scrollbar-thumb{
            border-radius: .5rem;
            background:#0004;
            visibility:hidden;
        }
        .table:hover::-webkit-scrollbar-thumb{
          visibility:visible;

        }
        table{
            width:100%;
        }

        td img{
            width:36px;
            height:36px;
            margin-right:.5rem;
            border-radius:50%;
            vertical-align:middle;
        }
        .table_header{
            background: #ad99dcfe;
            position: sticky;
            top: 0;
            left: 0;
            color: white;
        }
        table,th,td{
            border-collapse:collapse;
            padding:1rem;
        }
        
        th{
           background:#d5d1defe;
        }  */

         
/* 
         thead th{
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        padding: 5px;
        background:#d5d1defe;
        border: 2px solid #4CAF50;
        } */
    </style>
</head>
<body>
    <!-- <div class="banner">
        <div class="slider">
            <img src="image/img/img4.avif"  id="sliding">
        </div>
        <div class="overlay">
           
    
<div class="heading">
<h1 style="text-align:center;" class="leader">Employee Leaderboard</h1>
</div>
    <table id="empview">
    
        <thead>
            <tr>
                <th>Seq.</th>
                <th>Emp-ID</th>
                <th>Name</th>
                <th>Point</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>Manu</td>
                <td>20</td>
            </tr>
        </tbody>
    </table>
    </div>
        </div>
        
    </div> -->
    
    <?php include "header.php"; ?>
    <div class="container45">
    <main class="table">
        <section class="table_header">
            <h1>view Employee Details</h1>
        </section>
        <section class="table_body">
            <table id="tv">
                <thead id="hd">
                    <tr>
                        <th>id</th>
                        <th>customer</th>
                        <th>Location</th>
                        <th>order Date</th>
                        <th>status</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td><img src="image/img/img4.avif" alt=""></td>
                    <td>seol </td>
                    <td>17 dec,2024 </td>
                    <td><p>Delivered</p> </td>
                    <td>$128.90</td>
                    
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="image/img/img4.avif" alt=""></td>
                    <td>seol </td>
                    <td>17 dec,2024 </td>
                    <td><p>Delivered</p> </td>
                    <td>$128.90</td>
                    
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="image/img/img4.avif" alt=""></td>
                    <td>seol </td>
                    <td>17 dec,2024 </td>
                    <td><p>Delivered</p> </td>
                    <td>$128.90</td>
                    
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="image/img/img4.avif" alt=""></td>
                    <td>seol </td>
                    <td>17 dec,2024 </td>
                    <td><p>Delivered</p> </td>
                    <td>$128.90</td>
                    
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="image/img/img4.avif" alt=""></td>
                    <td>seol </td>
                    <td>17 dec,2024 </td>
                    <td><p>Delivered</p> </td>
                    <td>$128.90</td>
                    
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="image/img/img4.avif" alt=""></td>
                    <td>seol </td>
                    <td>17 dec,2024 </td>
                    <td><p>Delivered</p> </td>
                    <td>$128.90</td>
                    
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="image/img/img4.avif" alt=""></td>
                    <td>seol </td>
                    <td>17 dec,2024 </td>
                    <td><p>Delivered</p> </td>
                    <td>$128.90</td>
                    
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="image/img/img4.avif" alt=""></td>
                    <td>seol </td>
                    <td>17 dec,2024 </td>
                    <td><p>Delivered</p> </td>
                    <td>$128.90</td>
                    
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="image/img/img4.avif" alt=""></td>
                    <td>seol </td>
                    <td>17 dec,2024 </td>
                    <td><p>Delivered</p> </td>
                    <td>$128.90</td>
                    
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="image/img/img4.avif" alt=""></td>
                    <td>seol </td>
                    <td>17 dec,2024 </td>
                    <td><p>Delivered</p> </td>
                    <td>$128.90</td>
                    
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    
    </div>
    
    
<!-- 
<p>Try to <b>scroll</b> inside this frame to understand how sticky positioning works.</p>

<div class="sticky">I am sticky!</div>

<div style="padding-bottom:2000px">
  <p>In this example, the sticky element sticks to the top of the page (top: 0), when you reach its scroll position.</p>
  <p>Scroll back up to remove the stickyness.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
</div> -->
</body>
</html>