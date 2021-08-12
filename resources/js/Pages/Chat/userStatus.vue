<template>
  <div>
      <p class="text-base pl-2" >
            <ul>
                <li>
                    <span
                        @mouseover="hover = true"
                        @mouseleave="hover = false">
                            {{ usersOnline.length }} Online
                    </span>
                </li>
            </ul>
        </p>
      <ul v-if="hover" class="user-list ml-2 pl-2 py-3 text-gray-50">
          <li class="text-sm pl-2" v-for="user in usersOnline" :key="user">
            {{ user }}
          </li>
      </ul>
  </div>
</template>

<script>
export default {
    props: ['usersOnline'],
    data() {
        return {
            hover: false
        }
    }
}
</script>

<style scoped>

    ul {
    list-style: none;
    }

    ul li::before {
    content: "\2022";
    color: rgb(39, 230, 39);
    font-weight: bold;
    display: inline-block; 
    width: 1em;
    transform: translateY(2px);
    font-size: x-large;
    }

    .user-list li::before {
        color: rgb(66, 243, 66);
    }
    
    .user-list  {
        background-color: rgba(0, 0, 0, 0.35);
        position: absolute;
        z-index: 2;
        min-width: 100px;
        padding-right: 30px;
        filter: drop-shadow(0 1px 0.75rem rgb(141, 140, 140));
        border-radius: 4px;
    }
</style>