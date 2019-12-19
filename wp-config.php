<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'reat_wptheme' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p6w%%Z%d[X>*nt#4Et!,#ucQEeJfXV`B7k>!HW2<8{Kj,~M@D/&j[&rgo`sQWm.h' );
define( 'SECURE_AUTH_KEY',  ',F.nONJInXu_=6w[jPk2_$-:GVw?)3R4aZRqB}S3*QzvY9{cZN/Rn`~c-YBe G^+' );
define( 'LOGGED_IN_KEY',    '6Wi,QWZ-6l!*+ollR5/}|nn+w0IYSW/)]?~D.+vW.({URGk3zjlAq6O1h&o.3S&q' );
define( 'NONCE_KEY',        '7k?*#v%Z7+Olb6)s|^$BjZtt1n:gtKY#9~B0k3Y^N^b:n!s@!oy3^UH)*Zs=C%h.' );
define( 'AUTH_SALT',        '1j/%dGCh6*d3(nL$Ad>DBr2~vN?*P~2G?8J$?fg}9!.%-#RtSOR .>{,Xp5tks#u' );
define( 'SECURE_AUTH_SALT', '3L ?b,~gfm{:lqJ|fVArR?hJ~p+mg`Vf%Z^:k+0exsXFOOx4Yjx.)+dW;COfLB~6' );
define( 'LOGGED_IN_SALT',   'eu}r7Bc[u&gSdBbr5 W~yWN=FF)Z0snP+#|ys:NU$=i{WE]#)+fN){Oh8_D]Ir9o' );
define( 'NONCE_SALT',       'Z-x/xmp]KxuN[i54_Kf13U*Ml#$^XfyIAtW|Kn15@Gav&piaDyWBF`akoAj:O8]K' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
