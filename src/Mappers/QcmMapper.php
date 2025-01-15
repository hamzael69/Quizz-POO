<?php

class QcmMapper {
    public static function mapToObject(array $data){
        return new Qcm(
            $data['id'],
            $data['themeName']
        );
    }
}
