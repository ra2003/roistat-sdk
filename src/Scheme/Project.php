<?php
/**
 * @author Vladislav Alatorcev(Dangetsu) <clannad.business@gmail.com>
 */

namespace Analytics\Scheme;

use Analytics\Engine;
use Analytics\Engine\Exception;
use Analytics\Entity;

class Project extends AbstractScheme {
    /** @var string */
    protected $_entityName = 'Project';

    /**
     * @return Entity\Project[]
     * @throws Exception\AuthException
     * @throws Exception\BasicException
     */
    public function items() {
        $response = $this->_base->api()->send('user/projects');
        return $this->_buildEntity($response['projects']);
    }

    /**
     * @param Entity\Project $project
     * @return Entity\Project
     * @throws Exception\AuthException
     * @throws Exception\BasicException
     */
    public function create(Entity\Project $project) {
        $response = $this->_base->api()->send('account/project/create', $project, Engine\Api::METHOD_POST);
        $project->setId($response['data']['project_id'])->setCounter((new Entity\Counter())->load($response['data']['counter']));
        return $project;
    }
}