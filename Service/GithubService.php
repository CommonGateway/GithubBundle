<?php

// src/Service/GithubService.php

namespace CommonGateway\GithubIntegration\Service;

class GithubService
{

    /*
     * Returns a welcoming string
     * 
     * @return array 
     */
    public function githubHandler(array $data, array $configuration): array
    {
        return ['response' => 'Hello. Your GithubBundle works'];
    }
}
