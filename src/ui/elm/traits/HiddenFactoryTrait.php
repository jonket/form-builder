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

namespace FormBuilder\ui\elm\traits;


use FormBuilder\ui\elm\components\Hidden;

trait HiddenFactoryTrait
{
    /**
     * 隐藏组件
     *
     * @param string $field
     * @param mixed $value
     * @return Hidden
     */
    public static function hidden($field, $value)
    {
        return new Hidden($field, $value);
    }
}