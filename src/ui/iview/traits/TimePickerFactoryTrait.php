<?php
/**
 * PHP表单生成器
 *
 * @package  FormBuilder
 * @author   xaboy <xaboy2005@qq.com>
 * @version  2.0
 * @license  MIT
 * @link     https://github.com/xaboy/form-builder
 */

namespace FormBuilder\ui\iview\traits;


use FormBuilder\ui\iview\components\TimePicker;

trait TimePickerFactoryTrait
{
    /**
     * 时间选择组件
     *
     * @param string $field
     * @param string $title
     * @param string $value
     * @param string|array $type
     * @return TimePicker
     */
    public static function timePicker($field, $title, $value = '', $type = TimePicker::TYPE_TIME)
    {
        $timePicker = new TimePicker($field, $title, $value);
        return $timePicker->type($type);
    }

    /**
     * 事件选择
     *
     * @param string $field
     * @param string $title
     * @param string $value
     * @return TimePicker
     */
    public static function time($field, $title, $value = '')
    {
        return self::timePicker($field, $title, (string)$value);
    }

    /**
     * 时间区间选择
     *
     * @param string $field
     * @param string $title
     * @param string $startTime
     * @param string $endTime
     * @return TimePicker
     */
    public static function timeRange($field, $title, $startTime = '', $endTime = '')
    {
        return self::timePicker($field, $title, [(string)$startTime, (string)$endTime], TimePicker::TYPE_TIME_RANGE);
    }
}