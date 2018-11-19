<?php

namespace Biz\Course;

use AppBundle\Common\Exception\AbstractException;

class CourseException extends AbstractException
{
    const EXCEPTION_MODUAL = 16;

    const NOTFOUND_COURSE = 4041601;

    const FORBIDDEN_TAKE_COURSE = 4031602;

    const LEARNMODE_INVALID = 5001603;

    const COURSETYPE_INVALID = 5001604;

    const COURSE_NUM_LIMIT = 4031605;

    const FORBIDDEN_DELETE_PUBLISHED = 4031606;

    const SUB_COURSE_EXIST = 5001607;

    const COURSE_NUM_REQUIRED = 4031608;

    const UNPUBLISHED_COURSE = 4031609;

    const NOTFOUND_CHAPTER = 4041610;

    const CHAIN_NOT_REGISTERED = 5001611;

    const EXPIRYMODE_INVALID = 5001612;

    const EXPIRYDAYS_INVALID = 5001613;

    const EXPIRYENDDATE_INVALID = 5001614;

    const EXPIRYSTARTDATE_REQUIRED = 5001615;

    const EXPIRYENDDATE_REQUIRED = 5001616;

    const EXPIRY_DATE_LIMIT = 5001617;

    const NOT_MATCH_COURSESET = 5001618;

    const CHAPTERTYPE_INVALID = 5001619;

    const FORBIDDEN_MANAGE_COURSE = 4031620;

    const CLOSED_COURSE = 5001621;

    const UNBUYABLE_COURSE = 4031622;

    const EXPIRED_COURSE = 5001623;

    const BUY_EXPIRED = 5001624;

    const REACH_MAX_STUDENT = 4031625;

    const UN_ARRIVE = 5001626;

    public $messages = array(
        4041601 => 'exception.course.not_found',
        4031602 => 'exception.course.forbidden_take_course',
        5001603 => 'exception.course.learnmode_invalid',
        5001604 => 'exception.course.coursetype_invalid',
        4031605 => 'exception.course.count_no_more_than_10',
        4031606 => 'exception.course.forbidden_delete_published',
        5001607 => 'exception.course.have_sub_courses',
        4031608 => 'exception.course.count_no_less_than_1',
        4031609 => 'exception.course.course_not_published',
        4041610 => 'exception.course.not_found_chapter',
        5001611 => 'exception.course.chain_not_registered',
        5001612 => 'exception.course.expirymode_invalid',
        5001613 => 'exception.course.expirydays_invalid',
        5001614 => 'exception.course.expiryenddate_invalid',
        5001615 => 'exception.course.expirystartdate_required',
        5001616 => 'exception.course.expiryenddate_required',
        5001617 => 'exception.course.expirydate_end_later_than_start',
        5001618 => 'exception.course.not_match_courseset',
        5001619 => 'exception.course.chapter_type_invalid',
        4031620 => 'exception.course.forbidden_manage_course',
        5001621 => 'exception.course.closed_course',
        4031622 => 'exception.course.unbuyable_course',
        5001623 => 'exception.course.expired_course',
        5001624 => 'exception.course.buy_expired',
        4031625 => 'exception.course.reach_max_student_num',
        5001626 => 'exception.course.not_arrive',
    );
}
