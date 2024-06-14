<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type = "text/css"
</head>
    <style>
        P {
        font-family:Arial, Helvetica, sans-serif;
        }
        body{
            text-align: center;
        }
        form{
            margin-bottom: 10px;
            line-height: 28px;         
        }
    </style>
<body>
    <div class="kotak"> 
        <div class="item"> 
            <h1><b>Login</b></h1>
                        <?php if($this->session->flashdata('message')): ?>
                            <?php echo ($this->session->flashdata('message')); ?>
                <?php endif; ?>
                <form action="<?= base_url('AuthController'); ?>" method="post">
                <div> 
                    <div >
                        <label>Username</label>
                        <input class="nama" type="text" placeholder="Username" name="username" required/>
                  
                    </div>
                    <div >
                        <label>Password</label>
                        <input class="nama" type="password" placeholder="password" name="password" required/> 
                    </div>
                </div>
                <input class="kirim" type="submit" value="Kirim" name="login">
        </div>

    </div>        
        </form>
</body>
</html>