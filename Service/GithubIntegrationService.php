<?php

// src/Service/GithubIntegrationService.php

namespace CommonGateway\GithubBundle\Service;

class GithubIntegrationService
{

    /*
     * Returns a welcoming string
     * 
     * @return array 
     */
    public function githubIntegrationHandler(array $data, array $configuration): array
    {
        return ['response' => 'Hello. Your GithubIntegration works'];
    }
}
