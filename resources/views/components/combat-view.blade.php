<div id="combatView" class="view flex flex-col w-full h-screen overflow-hidden hidden">
    <x-title-bar viewTitle="Dungeon: X"/>
    <div class="flex w-full h-full relative">
        <img src="goblin-cave.png" alt="" class="absolute">
        <div class="playerSide border-r w-1/2 relative">
            <div id="characterSlot1" class="slot w-[150px] h-[250px] flex flex-col relative absolute top-[75px] left-[500px]">
                <img id="characterAvatar1" src="knight.png" alt="character1" class="max-h-[200px] scale-x-[-1]">
                <div class="stat-container text-white font-semibold divide-y divide-black bg-slate-700">
                    <div class="health-container flex w-full relative">
                        <div id="healthBar1" class="healthBar"></div>
                        <div class="flex w-full z-10 pl-2">
                            <p>HP:</p>
                            <p id="currentHealth1" class="currentHealth ml-1">0</p>
                            <p class="mx-1">/</p>
                            <p id="maxHealth1" class="maxHealth">0</p>
                        </div>
                    </div>
                    <div class="experience-container flex w-full relative">
                        <div id="expBar1" class="expBar"></div>
                        <div class="flex w-full z-10 pl-2">
                            <p>EXP:</p>
                            <p id="currentEXP1" class="ml-1">0</p>
                            <p class="mx-1">/</p>
                            <p id="requiredEXP1" class="">0</p>
                        </div>
                    </div>
                </div>
                <div class="level-container flex absolute font-semibold top-0 left-0 text-white">
                    <p>Lv. </p>
                    <p id="Level1">0</p>
                </div>
            </div>
            <div id="characterSlot2" class="slot relative w-[150px] h-[250px] flex flex-col"></div>
            <div id="characterSlot3" class="slot relative w-[150px] h-[250px] flex flex-col"></div>
        </div>
        <div class="enemySide w-1/2 relative">
            <div id="enemySlot1" class="slot w-[150px] h-[250px] flex flex-col absolute top-[75px] right-[500px]">
                <img src="goblin.png" alt="enemy1" class="max-h-200">
                <div class="stat-container text-white font-semibold bg-slate-700">
                    <div class="enemyHealth-container flex w-full relative">
                        <div id="enemyHealthBar1" class="healthBar"></div>
                        <div class="flex w-full z-10 pl-2">
                            <p>HP:</p>
                            <p id="enemyCurrentHealth1" class="ml-1">0</p>
                            <p class="mx-1">/</p>
                            <p id="enemyMaxHealth1" class="">0</p>
                        </div>
                    </div>
                </div>
                <div class="level-container flex absolute font-semibold top-0 left-0 text-white font-semibold">
                    <p>Lv. </p>
                    <p id="currentLevel1">1</p>
                </div>
            </div>
            <div id="enemySlot2" class="slot relative w-[150px] h-[250px] flex flex-col"></div>
            <div id="enemySlot3" class="slot relative w-[150px] h-[250px] flex flex-col"></div>
        </div>
        <button id="combatStart" class="rounded bg-red-500 hover:bg-red-300 absolute bottom-5 right-5 text-white font-semibold px-10 py-2">Start</button>
        <button id="initEntities" class="rounded bg-green-500 hover:bg-green-300 absolute bottom-5 left-5 text-white font-semibold px-10 py-2">Init</button>
    </div>
</div>



