let character1 = new Character()
let enemy1 = new Enemy()

// GENERAL ELEMENTS
const startButton = document.getElementById("combatStart")
const initButton = document.getElementById("initEntities")

// PLAYER ELEMENTS
let healthBar1 = document.getElementById("healthBar1")
let currentHealth1 = document.getElementById("currentHealth1")
let maxHealth1 = document.getElementById("maxHealth1")

let Level1 = document.getElementById("Level1")
let expBar1 = document.getElementById('expBar1')
let currentExp1 = document.getElementById("currentEXP1")
let requiredExp1 = document.getElementById("requiredEXP1")

// ENEMY ELEMENTS
let enemyHealthBar1 = document.getElementById("enemyHealthBar1")
let enemyCurrentHealth1 = document.getElementById("enemyCurrentHealth1")
let enemyMaxHealth1 = document.getElementById("enemyMaxHealth1")

let character1Attack
let enemy1Attack

function combatInit() {
    character1Attack = setInterval(Attack, character1.attackSpeed, character1, enemy1)
    enemy1Attack = setInterval(Attack, enemy1.attackSpeed, enemy1, character1 )
}

function initEntities() {
    character1.currentHealth = character1.maxHealth
    enemy1.currentHealth = enemy1.maxHealth
    character1.requiredExp = requiredExpForLevel(character1.Level)

    maxHealth1.innerHTML = character1.maxHealth.toString()
    currentHealth1.innerHTML = character1.maxHealth.toString()
    Level1.innerHTML = character1.Level.toString()
    requiredExp1.innerHTML = character1.requiredExp.toString()
    currentExp1.innerHTML = character1.currentExp.toString()
    expBar1.style.width = ((character1.currentExp / character1.requiredExp) * 100) + '%';

    enemyMaxHealth1.innerHTML = enemy1.maxHealth.toString()
    enemyCurrentHealth1.innerHTML = enemy1.maxHealth.toString()
}

function Attack(attacker, target) {
    target.currentHealth = target.currentHealth - attacker.Damage;
    takeDamage(target)
    if(target.currentHealth <= 0) {
        stopCombat()  
        if(target.IsEnemy) {
            gainExperience(attacker, target)
            setTimeout(Respawn, 3000, target)
        } 
    }
}

function takeDamage(target) {
    if(target == character1) {
        currentHealth1.innerHTML = character1.currentHealth
        healthBar1.style.width = ((character1.currentHealth / character1.maxHealth) * 100) + '%';
    }

    if(target == enemy1) {
        enemyCurrentHealth1.innerHTML = enemy1.currentHealth
        enemyHealthBar1.style.width = ((enemy1.currentHealth / enemy1.maxHealth) * 100) + '%';
    }

}

function stopCombat() {
    clearInterval(character1Attack)
    clearInterval(enemy1Attack)
}

function Respawn(enemy) {
    enemy.currentHealth = enemy.maxHealth
    enemyCurrentHealth1.innerHTML = enemy.maxHealth.toString()
    enemyHealthBar1.style.width = ((enemy.currentHealth / enemy.maxHealth) * 100) + '%';
    combatInit()
}

startButton.addEventListener('click', combatInit)
initButton.addEventListener('click', initEntities)