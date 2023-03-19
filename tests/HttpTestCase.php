<?php

namespace Tests;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\System\User;

abstract class HttpTestCase extends TestCase
{
    use RefreshDatabase;

    /**
     * Respective model for endpoint.
     *
     * @var Model|null
     */
    protected $model = null;

    /**
     * Session of registered user.
     *
     * @var Authenticatable|null
     */
    protected $session = null;

    /**
     * Prefix of api routes.
     *
     * @var string
     */
    protected string $API_PREFIX = '/api/';

    /**
     * Respective URL for endpoint.
     *
     * @var string|null
     */
    protected ?string $url = null;

    public function setUp(): void
    {
        parent::setUp();

        $this->session = $this->actingAs(User::factory()->create());
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_read_entities_by_request()
    {
        // Arrange
        $entity = $this->model::factory(3)->create();

        // Act
        $response = $this->session->get($this->API_PREFIX . $this->url);

        // Assert
        $response->assertJson($entity->toArray());
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_read_one_entity_by_request()
    {
        // Arrange
        $entity = $this->model::factory()->create();

        // Act

        // Assert
        $this->assertTrue(True);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_one_entity_by_request()
    {
        // Arrange
        $entity = $this->model::factory()->create();

        // Act

        // Assert
        $this->assertTrue(True);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_edit_one_entity_by_request()
    {
        // Arrange
        $entity = $this->model::factory()->create();

        // Act

        // Assert
        $this->assertTrue(True);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_delete_one_entity_by_request()
    {
        // Arrange
        $entity = $this->model::factory()->create();

        // Act

        // Assert
        $this->assertTrue(True);
    }

}
