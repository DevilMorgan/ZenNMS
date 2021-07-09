<?php

namespace Database\Seeders;

use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\sample\DeviceSettingsSeeder;
use Database\Seeders\sample\DeviceSeeder;
use Database\Seeders\sample\DeviceResponseTimeSeeder;
use Database\Seeders\sample\DeviceNeighboursSeeder;
use Database\Seeders\sample\DeviceInterfacesSeeder;
use Database\Seeders\sample\DeviceEntityPhysicalSeeder;
use Database\Seeders\sample\DeviceSnmpDetailsSeeder;
use Database\Seeders\sample\DeviceSnmpSettingsSeeder;
use Database\Seeders\sample\WirelessAccessPointsSeeder;
use Database\Seeders\sample\WirelessClientsCountSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'activity_log',
            'failed_jobs',
        ]);

        $this->call(AuthSeeder::class);
        $this->call(AnnouncementSeeder::class);
        $this->call([
            ChecksSeeder::class,
            DeviceTypesSeeder::class,
            IanaInterfaceTypeDefinitionsSeeder::class,
            IanaPhysicalClassDefinitionsSeeder::class,
            IanaTunnelTypeDefinitionsSeeder::class,
            InterfaceStatusesSeeder::class,
        //    PrivateEnterpriseNumbersSeeder::class,
        //   RackTypeSeeder::class,

                DeviceSeeder::class,
                DeviceEntityPhysicalSeeder::class,
                DeviceInterfacesSeeder::class,
                DeviceNeighboursSeeder::class,
                DeviceResponseTimeSeeder::class,
                DeviceSettingsSeeder::class,
                DeviceSnmpDetailsSeeder::class,
                DeviceSnmpSettingsSeeder::class,
                WirelessAccessPointsSeeder::class,
                WirelessClientsCountSeeder::class,
            ]);

        Model::reguard();
    }
}
