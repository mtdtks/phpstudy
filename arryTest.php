<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/06/15
 * Time: 11:48
 */



$ary = array(
    0 => array(
        'Students' => array(
            'id' => '1',
            'name' => 'yamada',
            'university' => 'testdaigaku',
        ),
    ),
    'Intern' => array(
        'id' => '0',
        'name' => 'intern1',
    ),
    1 => array(
        'Test' => array(
            'id' => '001',
            'test' => '111',
        )
    )
);


foreach ($ary As $rows) {
    echo $rows['Students']['name'];
}


?>