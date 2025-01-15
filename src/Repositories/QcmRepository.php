<?php
class QcmRepository extends AbstractRepository {

    
public function findAll(): array {
    $query = "SELECT * FROM theme" ;
    $stmt = $this->pdo->query($query);
    $qcmDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($qcmDatas as $qcmData){
        $qcm[] = QcmMapper::mapToObject($qcmData);
    }
    return $qcm;
}

    public function find(int $themeId): Qcm{
        $query = "SELECT * FROM theme WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['id'=> $themeId]);
        $qcmDatas = $stmt->fetch(PDO::FETCH_ASSOC);

        return QcmMapper::mapToObject($qcmDatas);
    }
}