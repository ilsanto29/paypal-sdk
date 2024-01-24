<?php 
namespace Paypal\Sdk\Response;
class ClientMetadata
{
    /**
     * @var string|null
     */
    public ?string $name;
    
    /**
     * @var string|null
     */
    public ?string $displayName;
    
    /**
     * @var string|null
     */
    public ?string $logoUri;
    
    /**
     * @var string[]|null
     */
    public ?array $scopes;
    
    /**
     * @var string|null
     */
    public ?string $uiType;
    
    /**
     * @param string|null $name
     * @param string|null $displayName
     * @param string|null $logoUri
     * @param string[]|null $scopes
     * @param string|null $uiType
     */
    /**
     * @return Ambigous <string, NULL>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getLogoUri()
    {
        return $this->logoUri;
    }

    /**
     * @return Ambigous <multitype:string , NULL>
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getUiType()
    {
        return $this->uiType;
    }

    /**
     * @param Ambigous <string, NULL> $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param Ambigous <string, NULL> $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @param Ambigous <string, NULL> $logoUri
     */
    public function setLogoUri($logoUri)
    {
        $this->logoUri = $logoUri;
    }

    /**
     * @param Ambigous <multitype:string , NULL> $scopes
     */
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
    }

    /**
     * @param Ambigous <string, NULL> $uiType
     */
    public function setUiType($uiType)
    {
        $this->uiType = $uiType;
    }

    
    
} 