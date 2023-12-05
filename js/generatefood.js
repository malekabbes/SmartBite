

function generateMenu(foodItems, nutritionalTargets) {
    // Sort food items by highest protein per calorie ratio for a protein-focused diet
    const sortedFoodItems = foodItems.sort((a, b) => 
      (b.proteins / b.calories) - (a.proteins / a.calories)
    );
  
    // Initialize menu and remaining nutritional targets
    let menu = [];
    let remainingTargets = { ...nutritionalTargets };
  
    for (const item of sortedFoodItems) {
      if (
        remainingTargets.calories - item.calories >= 0 &&
        remainingTargets.carbs - item.carbs >= 0 &&
        remainingTargets.fats - item.fats >= 0 &&
        remainingTargets.proteins - item.proteins >= 0
      ) {
        // Add item to menu
        menu.push(item);
  
        // Subtract item's nutritional values from remaining targets
        remainingTargets.calories -= item.calories;
        remainingTargets.carbs -= item.carbs;
        remainingTargets.fats -= item.fats;
        remainingTargets.proteins -= item.proteins;
      }
  
      // Stop if all targets have been met or nearly met
      if (
        remainingTargets.calories <= 0 &&
        remainingTargets.carbs <= 0 &&
        remainingTargets.fats <= 0 &&
        remainingTargets.proteins <= 0
      ) {
        break;
      }
    }
  
    return menu;
  }
  
  // Generate the menu
  const myMenu = generateMenu(foodItems, nutritionalTargets);
  console.log("Generated Menu: ", myMenu);