let expOnLevelUp

function requiredExpForLevel(level) {
    let total = 0;

    for (let i = 0; i < level; i++) {
        total += Math.round(i + 300 * Math.pow(2, i / 7.0))
    }

    return Math.round(total / 4)
}

function gainExperience(reciever, giver) {
    expOnLevelUp = reciever.currentExp + giver.expReward
    reciever.currentExp = expOnLevelUp
    console.log(reciever.currentExp)
    if (reciever.currentExp >= reciever.requiredExp) {
       levelUp(reciever)
    }
    updateExp(reciever)
}

function levelUp(character) {
    character.Damage += 5;
    character.maxHealth += 100;
    character.currentHealth = character.maxHealth;
    character.Defense += 2;
    character.Level++;
    character.requiredExp = requiredExpForLevel(character.Level)
    
    Level1.innerHTML = character.Level.toString()
    maxHealth1.innerHTML = character.maxHealth.toString()
    currentHealth1.innerHTML = character.maxHealth.toString()
    currentExp1.innerHTML = (expOnLevelUp - character.requiredExp).toString();
    requiredExp1.innerHTML = requiredExpForLevel(character.Level)
    expBar1.style.width = ((character.currentExp / character.requiredExp) * 100) + '%';
    
}

function updateExp(reciever) {
    currentExp1.innerHTML = reciever.currentExp.toString()
    expBar1.style.width = ((reciever.currentExp / reciever.requiredExp) * 100) + '%';
}
