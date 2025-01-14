<?php

class QcmMapper {
    public function mapToObject(array $data){
        return new Qcm(
            $data['id'],
            $data['themeName']
        );
    }
}
