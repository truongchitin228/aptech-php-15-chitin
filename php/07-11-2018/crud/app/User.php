<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //khi chúng ta đã tạo bảo ID hoa thì nên bỏ lạnh này vào cho không bị lỗi
    protected $primaryKey ="ID";
    // khi chúng ta hiện thị lõi cập nhật ngày giờ ... chúng ta bỏ lạnh này vào cho nó khắc phục lỗi hoàn chỉnh
    public $timestamps = false; 
}
