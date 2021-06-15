<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            [
                'id'	=> 1,
                'created_by' => 1,
                'updated_by' => 1,
                'category_id' => 1,
                'title'	=> 'Tập Yoga cơ bản ngay tại nhà với Thảo Nguyễn',
                'slug'	=> 'tap-yoga-co-ban-ngay-tai-nha-voi-thao-nguyen',
                'description'	=> 'Cải thiện sức khoẻ tinh thần và thể chất với những bài tập Yoga cơ bản ngay tại nhà của bạn',
                'contents'  => '<div class="yoga-course-info2">
                                <div class="container">
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3>Giới thiệu chương tr&igrave;nh</h3>
                                <p>Yoga &ndash; một thuật ngữ kh&aacute; quen thuộc hiện nay. C&oacute; rất nhiều l&yacute; do khiến Yoga c&oacute; sức h&uacute;t đối với nhiều người đến vậy: Yoga gi&uacute;p cải thiện cơ bắt, tăng t&iacute;nh linh hoạt, gi&uacute;p c&acirc;n bằng, thư gi&atilde;n v&agrave; giảm stress. Kh&ocirc;ng những thế, Yoga c&ograve;n l&agrave;m giảm c&aacute;c triệu trứng của bệnh trầm cảm, lo &acirc;u v&agrave; đau m&atilde;n &hellip;</p>
                                <p>Thật l&agrave; tuyệt vời để tham dự c&aacute;c lớp học Yoga tại c&aacute;c trung t&acirc;m thể dục thẩm mĩ chuy&ecirc;n nghiệp. Nhưng bạn lại đang gặp kh&oacute; khăn về cả thời gian lẫn t&agrave;i ch&iacute;nh để tham gia một kh&oacute;a học như thế. Kh&ocirc;ng sao cả!</p>
                                <p>Unica đ&atilde; kết hợp c&ugrave;ng Chuy&ecirc;n gia Nguyễn Hiếu tạo ra kho&aacute; học Tập Yoga cơ bản ngay tại nh&agrave; c&ugrave;ng chuy&ecirc;n gia. Được hướng dẫn tận t&igrave;nh bởi Đại sứ Yoga Nguyễn Hiếu, bạn sẽ biết c&aacute;ch tập một số động t&aacute;c Yoga cơ bản ngay tại nh&agrave;, hỗ trợ sức khỏe tinh thần v&agrave; thể chất của bạn.</p>
                                <p><iframe title="YouTube video player" src="https://www.youtube.com/embed/xGMXPky1wUc" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="embed-responsive embed-responsive-16by9">Bạn sẽ học được g&igrave;</div>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="yoga-course-info">
                                <div class="container">
                                <div class="row">
                                <div class="col-lg-12">
                                <div>
                                <div>
                                <ul>
                                <li>Sở hữu d&aacute;ng đẹp eo thon như mong muốn</li>
                                </ul>
                                </div>
                                <div>
                                <ul>
                                <li>R&egrave;n luyện t&acirc;m tr&iacute;, an nhi&ecirc;n trong cuộc sống</li>
                                </ul>
                                </div>
                                </div>
                                <div>
                                <div>
                                <ul>
                                <li>Giải độc cơ thể, giảm stress hiệu quả</li>
                                </ul>
                                </div>
                                <div>
                                <ul>
                                <li>Tăng cường sức khỏe, đẩy l&ugrave;i bệnh tật</li>
                                </ul>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>',
                'img_path' => 'public/program-photos/XLPbCWgfk2ikWzGmPTY28psg2gS9FjjVxutge2T6.jpg',
                'is_featured' => 0,
                'is_published' => 1,
                'views' => 1,                
            ],
        ];

        Program::insert($programs);
    }
}