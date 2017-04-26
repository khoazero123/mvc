
 Website đơn giản xây dựng bằng mô hình MVC.

 Chủ đề website: Blog
 Các chức năng: Danh sách bài viết, tìm kiếm, đăng ký, đăng nhập, viết bài mới, chỉnh sửa bài viết.
 Tác giả: Võ Văn Khoa
 Email: khoazero123@gmail.com
 Demo: http://sub-khoazero123.rhcloud.com

 Hưỡng dẫn sử dụng framework: 

 Thiết lập đường dẫn ứng dụng và thông tin cơ sở dữ liệu nằm trong file config.php
 Tiến hành import CSDL mẫu từ file mvc.sql.zip vào CSDL
 Các file css, js, image được đặt ở trong thư mục public
 
 Mọi request từ người dùng sẽ được xử lý bởi file index.php, từ file này dựa theo 2 tham số chính $_REQUEST['c'] và $_REQUEST['a'] sẽ diều hướng tới file xử lý của Controller đó.

 Để thêm mới chức năng cho webiste, ví dụ bổ sung thêm tính năng "Liên hệ đến website":
 Đầu tiên ta tạo 1 file controller để xử lý phần "Liên hệ" ở trong thư mục "Controllers".
 Giả sử ta quy định keywork (Tên controller) để xử lý tác vụ "Liên hệ" là "contact",
 Ta tạo file controller trong thư mục "Controllers" có tên là contact.php và tạo tên class trong file này cũng là Contact.
 Trong class Contact này ta tạo 1 function để in form điền thông tin liên hệ, function này có tên là index() (Tên function index này là để gọi mặc định ta qua định ở file index.php).
 Trong function ta gọi đến file chứa phần view để in ra giao diện form Liên hệ.
 Tạo tiếp 1 function để xử lý hành động lưu thông tin mà người dùng nhập từ form trước đó vào CSDL, ví dụ có tên là saveContact().

Hàm này sẽ có nhiệm vụ liên hệ với model mà ta sẽ tạo tiếp theo để tiền hành lưu Thông tin vào CSDL.



Trên đây là các bước cơ bản để có thể sử dụng framwork của em cho việc phát triển 1 website theo mô hình MVC đơn giản.
