<div id="{{$entityID}}" class="border-2 rounded border-slate-950 bg-slate-600 flex flex-col w-[150px] h-fit">
    <div class="flex items-center justify-center">
        <img src="{{$avatarImage}}" alt="" class="w-[100px] h-[150px]">
    </div>
    <div class="stat-conainter text-white font-semibold">
        <div id="{{$healthBarID}}" class="health-container flex border-y-2 border-slate-950 pl-1 relative">
            <div class="flex z-10">
                <p>HP:</p>
                <p class="currentHealth ml-1">0</p>
                <p>/</p>
                <p class="maxHealth">0</p>
            </div>
        </div>
        <div id="{{$expBarID}}" class="experience-container flex pl-1 relative">
            <p>EXP:</p>
            <p class="currentExperience ml-1">0</p>
            <p>/</p>
            <p class="requiredExperience">0</p>
        </div>
    </div>
</div>