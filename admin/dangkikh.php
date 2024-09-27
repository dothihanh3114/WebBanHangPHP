<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
            --box-shadow: 0 0 10px rgba(0,0,0,0.1);
            --light-color: #666;
            --green: #27ae60;
            --blackk: #192a56;
        }
        .order {
            max-width: 60rem;
            margin: auto;
            padding: 2rem;
            /* background: #fff;
            border-radius: .5rem;
            box-shadow: var(--box-shadow);
            border: .1rem solid rgba(0, 0, 0, .2); */
        }
        .order form .inputBox {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1rem;
        }

        .order form .inputBox .input {
            width: calc(49% - .5rem);
            box-sizing: border-box;
        }

        .order form .inputBox .input span {
            display: block;
            padding: .5rem 0;
            font-size: 1.5rem;  
            color: var(--light-color);
        }

        .order form .inputBox .input input {
            width: 100%;
            background: #eee;
            border-radius: .5rem;
            padding: 1rem;
            font-size: 1.6rem;
            color: var(--black);
            text-transform: none;
            margin-bottom: 1rem;
            border: .1rem solid #ddd;
            box-sizing: border-box;
        }

        .order form .inputBox .input input:focus {
            border-color: var(--green);
        }

        .order form .btn_them {
            display: block;
            width: 30%;
            padding: 1rem;
            border: none;
            background: var(--blackk);   
            color: #fff;
            font-size: 1.5rem;
            border-radius: .5rem;
            cursor: pointer;
            margin-left: 180px;
        }

        .order form .btn_them:hover {
            background: var(--green);
        }
    </style>
</head>
<body>
    <div class="order" id="order">
        <form method="post" enctype="multipart/form-data" action="./index.php?content=addkh">
            <div class="inputBox">
                <div class="input">
                    <span>Họ và tên</span>
                    <input type="text" id="txt_ten" name="txt_ten" placeholder="Nhập họ và tên của bạn"/>
                </div>
                <div class="input">
                    <span>Tên đăng nhập</span>
                    <input type="text" id="txt_ndd" name="txt_ndd" placeholder="Nhập tên đăng nhập của bạn"/>
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>Mật khẩu</span>
                    <input type="text" id="txt_pass" name="txt_pass" placeholder="Nhập địa chỉ"/>
                </div>
                <div class="input">
                    <span>Quyền truy cập</span>
                    <input type="text" id="txt_qtc" name="txt_qtc" placeholder="Nhập quyền truy cập"/>
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>Địa chỉ</span>
                    <input type="text" id="txt_dc" name="txt_dc" placeholder="Nhập địa chỉ"/>
                </div>
                <div class="input">
                    <span>Số điện thoại</span>
                    <input type="text" id="txt_sdt" name="txt_sdt" placeholder="Nhập số điện thoại"/>
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Mã số thuế</span>
                    <input type="text" id="txt_stk" name="txt_stk" placeholder="Nhập số tài khoản"/>
                </div>
                <div class="input">
                    <span>Email</span>
                    <input type="text" id="txt_email" name="txt_email" placeholder="Nhập email"/>
                </div>
            </div>

            <input type="submit" value="Đăng ký" class="btn_them">
        </form>
    </div>

    
</body>
</html>
