<!-- views/user_listing.php -->
<html>
    <head>
        <title>Paging Example-User Listing</title>
    </head>
     
    <body>
        <div class="container">
            <h1 id='form_head'>User Listing</h1>
 
            <?php if (isset($results)) { ?>
                     
                    <?php foreach ($results as $data) { ?>
                        <table border="2" style="margin-top : 10px;width:100%;">
                    <tr>
                        <td colspan="1" rowspan="3" style="width: 30%; height:50px;"><img style="width: 100%; height:150px; " src="images/<?php echo $data->hinh_anh; ?>"></td>
                        <td style="max-width: 70%;">
                            <div>
                                <h5><?php echo $data->ten_tin_tuc; ?>
                            </div>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td style="max-width: 70%;">
                            <div>
                                <p><?php echo $data->mo_ta; ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="max-width: 70%;">
                                <p><?php echo $data->tac_gia; ?></p>
                            </div>
                        </td>
                    </tr>
                </table>
                    <?php } ?>
               
            <?php } else { ?>
                <div>No user(s) found.</div>
            <?php } ?>
 
            <?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>
        </div>
    </body>
</html>