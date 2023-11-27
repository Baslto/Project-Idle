<div class="view flex flex-col w-full h-full overflow-hidden relative hidden">
    <x-title-bar viewTitle="Characters"/>
    <div class="w-full h-full">
        <div class="character-container flex flex-col flex-wrap space-x-4 space-y-4 p-16">
            <div class="flex items-center justify-center characterSaveSlot h-[150px] w-[150px] rounded bg-slate-600 hover:bg-slate-500 relative group cursor-pointer">
                <img src="knight.png" alt="character" class="w-[100px]">
                <div class="bg-slate-600 rounded text-center z-10 group-hover:bg-slate-500 w-full px-2 text-white font-semibold absolute bottom-0">
                    <p class="characterName">Knight</p>
                    <p class="">Level: <span class="characterLevel"></span></p>
                </div>
            </div>
        </div>
    
        <div id="character-creation-container" class="w-full h-full flex items-center justify-center absolute top-0 hidden">
            <div class="w-full h-full bg-black opacity-75 absolute top-0 z-20">test</div>
            <div class="relative text-white rounded-xl bg-slate-600 w-[500px] h-[400px] px-20 z-30">
                <h1 class="text-2xl font-semibold text-center mb-4 pt-4">Character erstellen</h1>
                <div class="">
                    <img id="characterCreationImage" src="knight.png" alt="" class="h-[150px] mx-auto">
                </div>
                <form action="/characterCreation" method="post" class="px-12 space-y-2">
                    @csrf
                    <input type="text" id="userid" name="userid" value="{{Auth::id()}}" class="hidden">
                    <div class="flex flex-col">
                        <label for="characterName">Name:</label>
                        <input type="text" id="characterName" name="characterName" class="rounded text-black">
                    </div>
                    <div class="flex flex-col">
                        <label for="characterClass" class="">Klasse:</label>
                        <select name="characterClass" id="characterClass" class="text-black rounded">
                            <option value="swordfighter" selected="selected">Schwertkämpfer</option>
                            <option value="mage">Magier</option>
                            <option value="rogue">Schurken</option>
                        </select>
                    </div>
                    <div class="absolute bottom-4 left-6">
                        <div class="creation-button rounded-md font-semibold bg-red-500 hover:bg-red-400 cursor-pointer py-1 px-4">Abbrechen</div>
                    </div>
                    <div class="absolute bottom-4 right-6">
                        <button type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-1 px-4">Erstellen</button>
                    </div>
                </form>
            </div> 
        </div>
        <button class="creation-button rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-1 px-4 absolute bottom-4 right-6 text-white font-semibold">Character erstellen</button>
    </div>
</div>