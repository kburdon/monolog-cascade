<?php
namespace Cascade\Config\Loader\FileLoader;

use Symfony\Component\Config\Loader\FileLoader;

/**
 * JSON loader class. It can load a JSON string or a Yaml file
 * @see FileLoaderAbstract
 *
 * @author Raphael Antonmattei <rantonmattei@theorchard.com>
 */
class Json extends FileLoaderAbstract
{
    /**
     * Valid file extensions for this loader
     * @var array
     */
    public static $validExtensions = array('json');

    /**
     * Load a JSON string/file
     *
     * @param  string $resource JSON string or file path to a JSON file
     * @param  string|null $type This is not used.
     * @return array array containing data from the parsed JSON string or file
     */
    public function load($resource, $type = null)
    {
        return json_decode($this->readFrom($resource), true);
    }

    /**
     * Determine whether a given string is supposed to be a Json string
     * This is a very simplified validation to avoid calling
     * json_decode (which is much more expensive). If the json is invalid, it will throw an
     * exception when we actually load it.
     *
     * @param  string  $string String to evaluate
     * @return boolean whether or not the passed string is meant to be a JSON string
     */
    private function isJson($string)
    {
        return (
            !empty($string) &&
            ($string{0} === '[' || $string{0} === '{')
        );
    }

    /**
     * Return whether or not the passed in resrouce is supported by this loader
     *
     * @param  string $resource plain string or filepath
     * @param  string $type not used
     * @return boolean whether or not the passed in resource is supported by this loader
     */
    public function supports($resource, $type = null)
    {
        if (is_string($resource)) {
            if ($this->isFile($resource)) {
                return $this->validateExtension($resource);
            } else {
                return $this->isJson($resource);
            }
        }

        return false;
    }
}
