<?php

use Illuminate\Database\Seeder;

class CriteriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('criterias')->insert([
            [
                'id' => 1,
                'code' => 'C1',
                'name' => 'Khám phá sự thật và phát triển kiến thức',
                'description' => 'ICT cho phép học sinh khám phá nhiều hơn thế giới thực, sử dụng các công cụ và các thông tin cập nhật để xây dựng một nền tảng kiến thức sâu và rộng',
                'explain' => 'Học sinh có thể tiếp cận nhiều nguồn thông tin sử dụng các kho dữ liệu thông tin, các hệ thống online, và các hệ thống truy cập thông tin.\nHọc sinh sau đó có thể sử dụng các công cụ ICT để phân tích, diễn giải thông tin, nhận các phản hồi của chuyên gia, chính xác hóa sự hiểu biết, xây dựng kiến thức mới và chuyển tải kiến thức từ môi trường học tập ra bên ngoài.',
                'example' => 'Học sinh sử dụng các phần mềm soạn thảo văn bản, tính toán, các phần mềm đồ họa để thu thập, phân tích thông tin, phát triển và thiết kế môi trường học mới.\nHọc sinh sử dụng ICT để phân tích và đánh giá thông tin để khám phá các vấn đề vệ sinh nước sạch ở địa phương.',
                'weight' => 1/9,
                'type_id' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 2,
                'code' => 'C2',
                'name' => 'Hỗ trợ việc học tập tích cực và đánh giá thực',
                'description' => 'ICT có thể được sử dụng để hỗ trợ học sinh học tập tích cực hơn trong quá trình học tập và học tập bằng hành động nhiều hơn là chỉ nghe và đọc.\nKết quả là điều đó khuyến khích việc đánh giá gắn liền với các hoat động hơn là tách biệt nó.',
                'explain' => 'Học sinh có điều kiện và cơ hội để tự tạo thông tin và thể hiện ý tưởng riêng của mình.\nHọc sinh có nhiều ảnh hưởng hơn đối với các quá trình học tập và các hoạt động đáp ứng tốt hơn nhu cầu của các em.\nĐiều này hỗ trợ nhiều hơn sự phát triển các khung khái niệm giúp cho việc học tập sâu hơn. Việc đánh giá cũng thực hơn bắt nguồn từ việc học tập tích cực.',
                'example' => 'Học sinh tạo các video về hoạt động của nhà trường để nói về những gì mà các em đánh giá.Học sinh sử dụng môi trường mô phỏng để xem xét việc xây dựng thị trấn.\nHọc sinh giao tiếp với người khác để sáng tác vở diễn.\nHọc sinh sử dụng diễn đàn online để tìm kiếm thông tin phản hồi và giải thích sâu hơn các khái niệm.',
                'weight' => 1/9,
                'type_id' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 3,
                'code' => 'C3',
                'name' => 'Tích cực hóa sự tham gia của học sinh bằng sự khuyến khích và thách thức các em',
                'description' => 'Sự tương tác, các phương tiện truyền thông đa dạng và các đặc điểm giao tiếp của ICT được sử dụng để cung cấp thêm động lực và sự thách thức các kinh nghiệm học tập nhằm khuyến khích học sinh tham gia tích cực hơn vào bài học.',
                'explain' => 'Các nhà thiết kế phần mềm tăng cường các giao tiếp, các phương tiện truyền thông đa dạng và các tính chất giao tiếp của ICT để tạo nên các tính chất mô phỏng và các kinh nghiệm học tập thú vị cho học sinh. \nNhìn chung học sinh thích sử dụng máy vi tính và có thái độ tích cực hơn đối với việc học tập của các em khi các em sử dụng các máy vi tính. Điều đó giúp duy trì sự hứng thú của nhiều học sinh. \n Các phần mềm tương tác được sử dụng để giúp học sinh nắm bắt tốt hơn các khái niệm và các ý tưởng khó và sử dụng các khái niệm ý tưởng này vào những hoàn cảnh tương tự.',
                'example' => 'Học sinh sử dụng tốt gói gia sư qua phôn với các thiết bị công nghệ thông tin mô phỏng và sự gia tăng các thách thức. \n Học sinh giải quyết các vấn đề phức tạp của toán học trong thế giới ảo. Học sinh viết tiểu sử của mình cho các bạn quen biết qua các phương tiện điện tử.',
                'weight' => 1/9,
                'type_id' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 4,
                'code' => 'C4',
                'name' => 'Cung cấp công cụ để nâng cao chất lượng sản phẩm của học sinh',
                'description' => 'Các công cụ ICT được sử dụng để nâng cao chất lượng sản phẩm của học sinh, đặc biệt đối với các học sinh ở lại lớp, thao tác chậm đối với các kĩ năng viết, vẽ và sử dụng máy tính. Các thao tác này rất quan trọng để học sinh phát triển các kĩ năng tư duy bậc cao.',
                'explain' => 'Các thao tác tư duy bậc thấp và sự lặp lại không cần thiết sẽ không kích thích và không giúp việc học tập có hiệu quả, và có thể không thể hiện được mục đích thật của việc học tập. \n Nhiều ứng dụng của máy vi tính giúp học sinh nhanh chóng thực hiện các thao tác này để các em tập trung vào mục đích chính của hoạt động học tập. Các phần mềm đánh máy, các đồ họa hay tính toán, các gói thông tin và các phầm mềm khác hỗ trợ việc học tập của học sinh. ',
                'example' => 'Học sinh trình bày các biểu đồ thể hiện các thông tin và số liệu thu thập được từ các khảo sát. \n Học sinh sử dụng phần mềm tính giá cả, cài đặt hệ thống để nâng cao chất lượng thiết kế.',
                'weight' => 1/9,
                'type_id' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 5,
                'code' => 'C5',
                'name' => 'Cung cấp thang cho các kĩ năng tư duy bậc cao',
                'description' => 'Các công cụ phần mềm được sử dụng để hỗ trợ sự phát triển của các kĩ năng tư duy bậc cao như ứng dụng, phân tích và tổng hợp.',
                'explain' => 'Sử dụng các thang nhận thức và các công cụ giúp học sinh giải quyết các vấn đề có vẻ khó đối với học sinh. Các thang công cụ thường được đề cập đến là phần mềm điện tử hỗ trợ năng lực thể hiện (Electronic Performance Support Software (EPSS). \n Các công cụ phần mềm được sử dụng để phân tích và trình bày, kết nối thông tin ở các hình thức khác nhau, giúp cho việc tương tác tích cực. Điều này cho phép giáo viên cung cấp nhiều hoạt động để hỗ trợ học sinh trở thành những người tư duy phê phán, những người thiết kế và giải quyết vấn đề. \n Các hệ thống máy vi tính cung cấp nhiều hoạt động mô phỏng trong đó học sinh có thể ứng dụng các kĩ năng tư duy bậc cao và tạo các cơ hội để lĩnh hội sâu kiến thức.',
                'example' => 'Học sinh sử dụng bảng Tư liệu để so sánh và tương phản các kiểu chữ khác nhau trong hai miêu tả. \n Học sinh kiến tạo các khái niệm sử dụng các phần mềm bản đồ và đồ họa. \n Học sinh sử dụng phần mềm word để biên tập một đoạn mô tả từ vai trò của người thứ nhất sang vai trò của người thứ hai. Học sinh sử dụng phần mềm để tính toán ngân sách.',
                'weight' => 1/9,
                'type_id' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 6,
                'code' => 'C6',
                'name' => 'Tăng cường sự độc lập của học sinh',
                'description' => 'ICT có thể sửdụng để cung cấp các kinh nghiệm học tập mọi nơi và mọi lúc cần thiết cho phép học sinh học theo tốc độ riêng của bản thân.',
                'explain' => 'Các phần mềm tương tác và các hệ thống online sử dụng để cung cấp cho học sinh học tập một cách độc lập cả về thời gian và nội dung. Không cần thiết để tất cả các học sinh làm cùng một việc trong cùng một thời gian. Toàn bộ lớp học không phải là một nhóm. \n Các cá nhân học sinh học tập theo những chủ đề độc lập. Những điều này liên quan đến việc học tập suốt đời, học tập dự án hay học tập dựa trên người học. \n Các công cụ ICT có thể sử dụng để ghi lại các ý nghĩ, hỗ trợ sự phản ánh và đánh giá sự tiến bộ của người học.',
                'example' => 'Học sinh sử dụng các hệ thống online để theo dõi tiến độ công việc. \n Học sinh sử dụng phầm mềm gia sư online. \n Học sinh không thể đến lớp sử dụng phần mềm gia sư và hệ thống quản lí học tập online.',
                'weight' => 1/9,
                'type_id' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 7,
                'code' => 'C7',
                'name' => 'Tăng cường sự hợp tác và phối hợp',
                'description' => 'ICT được sử dụng để hỗ trợ việc học tập liên quan đến sự hợp tác của nhiều người học trong và ngoài nhà trường và với giáo viên, phát triển một cộng đồng học tập giàu mạnh.',
                'explain' => 'Cộng tác là triết lí của sự tương tác và cá nhân hóa phong cách học tập mà các cá nhân chịu trách nhiệm về hành động của mình, bao gồm cả việc học tập và sự tôn trọng các năng lực và sự đóng góp của các bạn học. Cộng tác là cấu trúc của sự tương tác được thiết kế để hỗ trợ việc hoàn thành một sản phẩm cụ thể cuối cùng qua những người làm việc cùng nhau trong cùng một nhóm. \n .ICT cung cấp sự hỗ trợ cho các nhóm làm việc dự án. Việc sử dụng ICT để hỗ trợ các hoạt động học tập cộng tác và hợp tác là công cụ có giá trị to lớn để tạo ra các cộng đồng học tập.',
                'example' => 'Học sinh làm việc nhóm trên dự án Webquest. \n Học sinh sử dụng email để hợp tác với cảnh sát địa phương đểphát hiện các vụ buôn bán lậu. \n Học sinh cung cấp thông tin về các điều kiện thời tiết cho các chương trình dự báo thời tiết của đài địa phương.',
                'weight' => 1/9,
                'type_id' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 8,
                'code' => 'C8',
                'name' => 'Gắn việc học với người học',
                'description' => 'ICT có thể sử dụng để hỗ trợ các chương trình cá nhân hóa người học thông qua việc sử dụng các hệ thống gia sư thông minh hay hệ thống quản lí việc học tập qua máy vi tính. Học sinh có thể được hỗ trợ các hoạt động phù hợp với nhu cầu của các em, đặc biệt với các em có nhu cầu đặc biệt',
                'explain' => 'Theo dạy học truyền thống thì không thể cung cấp cho từng học sinh một kiểu học tập và các kinh nghiệm học tập cá nhân. \n Các tính chất của chương trình cá nhân hóa và các hoạt động tương tác giúp phát triển phần mềm dạy học cá nhân hóa người học. Các hệ thống gia sư thông minh hay hệ thống quản lí việc học tập qua máy vi tính sử dụng các thông tin của học sinh để cung cấp một cách thức dạy học phù hợp với từng học sinh. \n Mỗi học sinh có thể trải nghiệm khác nhau khi sử dụng các phần mềm hỗ trợ học tập. Thông tin ngược được cung cấp kịp thời hơn. \n Hệ thống quản lí việc học tập qua máy vi tính giúp giáo viên lập kế hoạch và giám sát việc học tập của từng học sinh. Các hệ thống gia sư thông minh hay hệ thống quản lí việc học tập qua máy vi tính ngày càng được sử dụng rộng rãi.',
                'example' => '',
                'weight' => 1/9,
                'type_id' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 9,
                'code' => 'C9',
                'name' => 'Vượt qua các trở ngại khó khăn thể chất.',
                'description' => 'Sự đa dạng của các đầu vào và đầu ra cung cấp cơ hội cho các Học sinh khuyết tật tham gia vào các hoạt động học tập như các học sinh binh thường khác.',
                'explain' => 'Đối với một số học sinh máy vi tính cung cấp môi trường để các em có thể giảm mức độ khuyết tật của mình.',
                'example' => 'Sự đa dạng của các đầu vào và đầu ra cung cấp cơ hội cho các Học sinh khuyết tật tham gia vào các hoạt động học tập như các học sinh binh thường khác. \n Đối với một số học sinh máy vi tính cung cấp môi trường để các em có thể giảm mức độ khuyết tật của mình.',
                'weight' => 1/9,
                'type_id' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 10,
                'code' => 'C10',
                'name' => 'Lớp học theo hình thức học hỗn hợp có chất lượng tương tự lớp học dạy giáp mặt?',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 11,
                'code' => 'C11',
                'name' => 'Học liệu điện tử (video, e-book, slides etc.) trong khóa học phù hợp với nội dung và mục tiêu đào tạo của môn học và đem lại hiệu quả tốt trong học tập?',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 12,
                'code' => 'C12',
                'name' => 'Tỷ lệ phân phối cho các hoạt động học trên lớp, trực tuyến được sắp xếp hợp lý, hỗ trợ tốt quá trình học tập',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 13,
                'code' => 'C13',
                'name' => 'Hình thức đào tạo hỗn hợp tác động tích cực đến kết quả học tập: khối lượng kiến thức tăng nhiều hơn và kiến thức được tổ chức tốt hơn và có thể dễ dàng xem lại bài học',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 14,
                'code' => 'C14',
                'name' => 'Các thầy/ cô dạy các lớp học hỗn hợp thường xuyên tương tác, trả lời thắc mắc, hỏi đáp với sinh viên trên hệ thống LMS?',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 15,
                'code' => 'C15',
                'name' => 'Các bài kiểm tra/ đánh giá/ bài tập được sử dụng bởi các thầy cô trên hệ thống LMS mang lại hiệu quả tích cực?',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 16,
                'code' => 'C16',
                'name' => 'Dễ dàng tìm kiếm các tài liệu phù hợp với nhu cầu (bài tập, sách, tài liệu tham khảo) thông qua lớp học hỗn hợp hơn so với lớp học truyền thống',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 17,
                'code' => 'C17',
                'name' => 'Tốc độ tải của trang web nhanh, dễ dàng xem và tải các tài nguyên học tập',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 18,
                'code' => 'C18',
                'name' => 'Tổ chức lớp học trên phần LMS logic, trực quan, giúp việc chuyển tiếp giữa các khóa học, bài học dễ dàng',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 19,
                'code' => 'C19',
                'name' => 'Anh (Chị)  hài lòng với hình thức đào tạo hỗn hợp và sẽ tiếp tục tham gia các lớp học dạy theo hình thức hỗn hợp trong thời gian tới (nếu có)',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 20,
                'code' => 'C20',
                'name' => 'Liệt kê các điều kiện học tập',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 21,
                'code' => 'C21',
                'name' => 'Mô tả rõ ràng, đầy đủ các mục đích sư phạm cơ bản',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 22,
                'code' => 'C22',
                'name' => 'Mô tả cụ thể, chi tiết các kỹ năng đầu ra hướng tới',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 23,
                'code' => 'C23',
                'name' => 'Mô tả cụ thể, rõ ràng yêu cầu đánh giá của khóa học',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 24,
                'code' => 'C24',
                'name' => 'Tập hợp các bài học cùng các bài tập đi kèm',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 25,
                'code' => 'C25',
                'name' => 'Mô tả rõ ràng phương án hỗn hợp giữa các hoạt động học trực tuyến và giáp mặt',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 26,
                'code' => 'C26',
                'name' => 'Cung cấp các hoạt động kiểm tra, đánh giá định kì',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 27,
                'code' => 'C27',
                'name' => 'Tỷ lệ thời lượng hỗn hợp trực tuyến/giáp mặt phù hợp với nội dung, điều kiện dạy học ',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 28,
                'code' => 'C28',
                'name' => 'Giao diện của các mô-đun đảm bảo tính mỹ thuật, thân thiện với người học',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 29,
                'code' => 'C29',
                'name' => 'Cung cấp các hỗ trợ, giải đáp, tư vấn (kĩ thuật, học tập)',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 30,
                'code' => 'C30',
                'name' => 'Mô tả rõ các mục tiêu cụ thể',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 31,
                'code' => 'C31',
                'name' => 'Cung cấp các mục lục sơ lược các hoạt động học tập',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 32,
                'code' => 'C32',
                'name' => 'Nội dung chuyên môn đáp ứng các mục tiêu cụ thể của bài học',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 33,
                'code' => 'C33',
                'name' => 'Thiết kế các bài tập luyện tập',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 34,
                'code' => 'C34',
                'name' => 'Cung cấp các tài liệu bổ trợ',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 35,
                'code' => 'C35',
                'name' => 'Cung cấp các công cụ tương tác, trao đổi thảo luận',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 36,
                'code' => 'C36',
                'name' => 'Nêu đề bài và các kết quả/giải pháp cần đạt được và các tiêu chí đánh giá',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 37,
                'code' => 'C37',
                'name' => 'Cung cấp các tài nguyên hỗ trợ việc làm bài',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 38,
                'code' => 'C38',
                'name' => 'Hướng dẫn các hình thức làm việc (cá nhân và/hoặc tập thể)',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 39,
                'code' => 'C39',
                'name' => 'Nêu trình tự thực hiện các bài tập',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 40,
                'code' => 'C40',
                'name' => 'Lớp học theo hình thức học hỗn hợp mang lại chất lượng tương tự lớp học giáp mặt?',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 41,
                'code' => 'C41',
                'name' => 'Thời lượng của khóa học là phù hợp',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 42,
                'code' => 'C42',
                'name' => 'Thời lượng dành cho các bài tập thực hành hoặc tham gia tình huống tương tác, thảo luận đã phù hợp với các sinh viên',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 43,
                'code' => 'C43',
                'name' => 'Các bài tập trong các chủ đề là phủ hợp và đủ',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 44,
                'code' => 'C44',
                'name' => 'Học liệu (ppt, tệp tài liệu, video...) của khóa học là phù hợp và đủ',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 45,
                'code' => 'C45',
                'name' => 'Thầy (cô) kiểm soát được kết quả học tập của sinh viên trên hệ thống LMS hiệu quả',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 46,
                'code' => 'C46',
                'name' => 'Thầy (cô) có thời gian tổ chức các hoạt động hợp tác/tập thể trên lớp hơn',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 47,
                'code' => 'C47',
                'name' => 'Sinh viên hứng thú, tích cực tham gia học tập ở khóa học hỗn hợp do thầy (cô) giảng dạy',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 48,
                'code' => 'C48',
                'name' => 'Thầy (cô) được hỗ trợ kĩ thuật kịp thời khi có yêu cầu',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 49,
                'code' => 'C49',
                'name' => 'Thầy (Cô)  hài lòng với hình thức đào tạo hỗn hợp và sẽ tiếp tục tham gia dạy theo hình thức hỗn hợp trong thời gian tới (nếu có)',
                'description' => '',
                'explain' => '',
                'example' => '',
                'weight' => 1/20,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
        ]);
    }
}
