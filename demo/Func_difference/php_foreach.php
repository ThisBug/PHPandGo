<?php
    /***
     * 此文件举例PHP的遍历与GO语言的遍历
     * @date 2017.05.31
     */

//php
$arr = [
    'name' => 'Hugh',
    'sex'  => 'man',
    'age'  => 25
];
/* 当然数组可以不用这种写法,直接初始化为array也行,不要为风格纠结
*   $arr = array(
*       'name' => 'Hugh',
*       'sex'  => 'man',
*       'age'  => 25
*   );
*/
foreach($arr as $key => $val)
{
    printf('%s - ',$val);
}
//不需要key时
foreach($arr as $item)
{
    printf('%s - ',$item);
}
?>
// GO
package main

import (
"fmt"
"strings"
)

func main() {
    str := "The quick brown fox jumps over the lazy dog"
    //strings.Fields(s) 将会利用 1 个或多个空白符号来作为动态长度的分隔符将字符串分割成若干小块，并返回一个 slice，如果字符串只包含空白符号，则返回一个长度为 0 的 slice
    sl := strings.Fields(str)
    fmt.Printf("Splitted in slice: %v\n", sl)
    for key, val := range sl {
        fmt.Printf("%s - ", val)
        fmt.Println(key)
    }
    fmt.Println()
    str2 := "GO1|The ABC of Go|25"
    //strings.Split(s, sep) 用于自定义分割符号来对指定字符串进行分割，同样返回 slice
    sl2 := strings.Split(str2, "|")
    fmt.Printf("Splitted in slice: %v\n", sl2)
    //不需要key时
    for _, val := range sl2 {
        fmt.Printf("%s - ", val)
    }
    fmt.Println()
    //Join 用于将元素类型为 string 的 slice 使用分割符号来拼接组成一个字符串
    str3 := strings.Join(sl2, ";")
    fmt.Printf("sl2 joined by ;: %s\n", str3)
}