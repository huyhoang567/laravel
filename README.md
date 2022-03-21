
## ---------------------------------------------------------------
- User: 
  Hiển thị danh sách sản phẩm cùng tính năng tìm kiếm, bộ lọc. 
  Khách hàng chọn sản phẩm vào giỏ hàng mà không cần đăng nhập. 
  Khách hàng nhấn đặt hàng thì yêu cầu nhập số điện thoại và địa chỉ để phía admin gọi xác nhận                                                           
- Admin: 
  Quản lý đơn hàng(đang chờ, đang giao, đã giao). 
  Tìm kiếm đơn hàng theo số điện thoại. Hiển thị đơn hàng ngày hiện tại, cập nhật đơn hàng mỗi 1 phút. 
  Lọc hóa đơn theo ngày. 
  Thống kê đơn hàng.
## ---------------------------------------------------------------
## Task 1 - Tạo db migrations - Thịnh

Mở file shoping.sql trong project, thực hiện tạo các migrations tương ứng cho các bảng.

Số lượng bảng: 10
Tên bảng: 
- [CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
)]

- [
    CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
)
]
- [CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ]
- [CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)]
- [CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext,
  `reviewDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)]
- [CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
)]
- [CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
)]
- [CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
)]
- [CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
)]
- [CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)]

Sau khi tạo bảng insert dữ liệu cho các bảng bằng SQL trong phpMyAdmin - dữ liệu trong file shopping.sql
Trạng thái: Xong


## Task 2 - Xuất dữ liệu cho trang Home - Hoàng

- Thực hiện trong file views/home.blade.php, views/Includes/side-bar.blade.php và controllers/HomeController.php
- Lấy dữ liệu từ bảng products liên kết bảng category, xuất dữ liệu với từng category trên giao diện Home. 
- Lấy dữ liệu từ bảng category liên kết bảng subcategory xuất dữ liệu cho sidebar menu.
- Chú ý: import csdl vào phpMyAdmin, file myproject1.sql trong source code. Nội dung dữ liệu trong csdl sẽ chỉnh sửa sau.
<img src='https://firebasestorage.googleapis.com/v0/b/melodic-stone-338516.appspot.com/o/laravel%2Ftask2.PNG?alt=media&token=9fe49de2-9d31-4a3f-b627-38002186f930'>

## Task 3 - Effect login - Thịnh
- Khai báo một class tự định nghĩa là User trong thư mục helpers để quản lý trạng thái đăng nhập.
- Sử dụng biến siêu toàn cục $_SESSION['user'] để lưu thông tin người đăng nhập
- Thực hiện: 
 + Khai báo một phương thức tĩnh trả về boolean nếu tồn tại $_SESSION['user']
 + Khai báo phương thức setUser() để gán thông tin đăng nhập và $_SESION
 + Khai báo các phương thức get thông tin người đăng nhập, xem bảng users trong CSDL để lấy tên trường.
 + Sử dụng trực tiếp class trên trong file views/Includes/top-menu.blade.php mà không cần qua controller để ẩn hiện nút Đăng nhập, Đăng xuất.
- Đây là task demo - không cần phải làm được, làm được thì càng tốt.