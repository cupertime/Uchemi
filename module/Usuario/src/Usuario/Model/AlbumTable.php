<?php

namespace Usuario\Model;

use Zend\Db\TableGateway\TableGateway;

class AlbumTable {

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }

    /**
     * Función encargada de obtener todos los registros asociados a la tabla album
     * @param type $id
     * @return ResultSet
     */
    public function fetchAll($id) {
        $rowset = $this->tableGateway->select(); /* Se obtienen todos los registros de la base de datos */
        return $rowset;
    }

    /**
     * Función encargada de obtener el registro o album asociado al id que se pasa por valor
     * @param type $id
     */
    public function getAlbum($id) {
        $id = (int) $id; /* Parsear id a intero */
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("El registro no fue encontrado.");
        }
        return $row;
    }

    /**
     * Función encargada de guardar los datos del album o ingresar el registro en la base de datos.
     * @param \Usuario\Model\Album $album
     * @throws \Exception
     */
    public function saveAlbum(Album $album) {
        $data = array(
            'artist' => $album->artist,
            'title' => $album->title,
        );
        $id = (int) $album->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else if ($this->getAlbum($id)) {
            $this->tableGateway->update($data, array('id' => $id));
        } else {
            throw new \Exception("Campo id no existe");
        }
    }

    /**
     * Función encargada de eliminar los registros de la base de datos, en base al id pasado por valor.
     * @param type $id
     */
    public function deleteAlbum($id) {
        $this->tableGateway->delete(array('id' => $id));
    }

}